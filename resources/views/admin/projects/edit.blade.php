@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Modifica Progetto</h1>

        <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
            @csrf()
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $project->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipologia</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $project->type }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ $project->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $project->date->format('d/m/Y') }}">
                @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $project->image }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">GitHub Link</label>
                <input type="text" class="form-control @error('github_link') is-invalid @enderror" name="github_link" value="{{ $project->github_link }}">
                @error('github_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary">Salva</button>

        </form>

        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">Indietro</a>

    </div>
@endsection