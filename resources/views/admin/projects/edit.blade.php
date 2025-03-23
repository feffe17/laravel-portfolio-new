@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Modifica Progetto</h1>
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <button type="submit" class="btn btn-success">Aggiorna</button>
    </form>
</div>
@endsection
