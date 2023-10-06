@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $project->name }}</h1>

        <h2>{{ $project->type }}</h2>

        <p>{{ $project->description }}</p>

        <p>{{ $project->date?->format('d/m/Y') }}</p>

        <img src="{{ $project->image }}" alt="" class="img-fluid">

        <a href="{{ $project->github_link }}">GitHub Link</a>

    </div>
@endsection
