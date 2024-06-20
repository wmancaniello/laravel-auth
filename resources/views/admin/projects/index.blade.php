@extends('layouts.admin')

@section('content')
    <div class="container mt-4 gap-5">
        <h1>Lista Progetti:</h1>
        <a class="btn btn-success my-2" href="{{ route('admin.projects.create') }}">
            <i class="fa-solid fa-plus"></i> Nuovo progetto
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProject as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
