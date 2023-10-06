@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>I Miei Progetti</h1>

        <div class="bg-light my-2">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-link">Nuovo Progetto</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Tipologia</td>
                    <td>Descrizione</td>
                    <td>Data</td>
                    <td>Immagine</td>
                    <td>GitHub Link</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->type }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->date?->format('d/m/Y') }}</td>
                        <td>{{ $project->image }}</td>
                        <td>{{ $project->github_link }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
