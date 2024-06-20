@extends('layouts.admin')

@section('content')
    <div class="container mt-4 gap-5">
        <h1>Lista Progetti:</h1>
        <a class="btn btn-success my-2" href="{{ route('admin.projects.create') }}">Nuovo progetto</a>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProject as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->slug }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
