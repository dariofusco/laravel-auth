@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $project->name }}</h1>

        <h2>{{ $project->type }}</h2>

        <p>{{ $project->description }}</p>

        <p>{{ $project->date }}</p>

        <img src="{{ $project->image }}" alt="" class="img-fluid" style="width: 200px">

        <a href="{{ $project->github_link }}">GitHub Link</a>

        <a href="{{ route('admin.projects.index') }}">Indietro</a>

    </div>
@endsection
