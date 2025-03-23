@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Nuovo Progetto</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
