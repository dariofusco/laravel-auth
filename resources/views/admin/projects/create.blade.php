@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Nuovo Progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf()

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control" name="date">
            </div>

            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image">
            </div>

            <div class="mb-3">
                <label class="form-label">GitHub Link</label>
                <input type="text" class="form-control" name="github_link">
            </div>

            <button class="btn btn-primary">Crea</button>

        </form>

    </div>
@endsection
