@extends('layouts.admin')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
@endsection
