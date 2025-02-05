@extends('layouts.app')
@section('title', 'Muallif Haqida Ma\'lumot')
@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Muallif: {{ $author->name }}
            <a class="text-danger" href="{{ route('authors.index') }}" style="margin-left: 10px;">Ortga</a>
        </h2>

        <div class="mb-3">
            <h5>Elektron pochta:</h5>
            <p>{{ $author->email }}</p>
        </div>

        <div class="mb-3">
            <h5>Yozgan Kitoblar:</h5>
            <ul>
                @foreach($books as $book)
                    @if(in_array($book->id, $selectedBooks))
                        <li>{{$book->title}}</li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div>
            <a href="{{ route('authors.edit', ['author' => $author]) }}" class="btn btn-warning">Muallifni Tahrirlash</a>
            <form action="{{ route('authors.destroy', ['author' => $author]) }}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Muallifni O'chirish</button>
            </form>
        </div>
    </div>

@endsection
