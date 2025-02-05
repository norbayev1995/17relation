@extends('layouts.app')
@section('title', 'Mualliflar CRUD')
@section('content')

    <div class="container mt-5">
        <a href="{{ route('index') }}" style="font-size: 25px;">Ortga</a>

        <h2 class="mb-4">Mualliflar Ro'yxati</h2>

        <a href="{{ route('authors.create') }}" class="btn btn-success mb-3">Yangi Muallif Qo'shish</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Muallif Nomi</th>
                <th>Email</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>
                        <a href="{{ route('authors.show', ['author' => $author]) }}" class="btn btn-info btn-sm">Ko'rish</a>
                        <a href="{{ route('authors.edit', ['author' => $author]) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('authors.destroy', ['author' => $author]) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">Nothing</div>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
