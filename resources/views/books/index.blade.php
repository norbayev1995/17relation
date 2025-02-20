@extends('layouts.app')
@section('title', 'Kitoblar Ro\'yxati')
@section('content')

    <div class="container mt-5">
        <a href="{{ route('index') }}" style="font-size: 25px;">Ortga</a>
        <h2 class="mb-4">Kitoblar Ro'yxati
            <a href="{{route('books.create')}}" class="btn btn-primary">Kitob Yaratish</a>

        </h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Kitob Nomi</th>
                <th>Tavsif</th>
                <th>Mualliflar</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{ $book->authors->pluck('name')->join(', ') }}</td>
                    <td>
                        <a href="{{ route('books.show', ['book' => $book]) }}" class="btn btn-info btn-sm">Ko'rish</a>
                        <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('books.destroy', ['book' => $book]) }}" method="post" style="display: inline-block">
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
