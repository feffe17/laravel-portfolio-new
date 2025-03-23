@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Crea Progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
