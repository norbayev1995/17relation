@extends('layouts.app')
@section('title', 'Muallifni Tahrirlash')
@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Muallifni Tahrirlash
            <a class="text-danger" href="{{ route('authors.index') }}" style="margin-left: 10px;">Ortga</a>
        </h2>

        <form method="POST" action="{{ route('authors.update', ['author' => $author]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Muallif Ismi</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Muallif ismini kiriting"
                       value="{{ $author->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Muallif Emaili</label>
                <input class="form-control" id="email" name="email" value="{{ $author->email }}" placeholder="Muallif emailini kiriting" required>
            </div>

            <div class="mb-3">
                <label for="books" class="form-label">Kitoblarni Tanlang</label>
                <select class="form-select" id="books" name="books[]" multiple>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}"
                        @if(in_array($book->id, $selectedBooks)) selected @endif
                        >{{ $book->title }}</option>
                    @endforeach
                </select>
                <div class="form-text">Bir nechta kitob tanlash uchun <strong>CTRL</strong> tugmasini bosib turib
                    tanlang.</div>
            </div>

            <button type="submit" class="btn btn-primary">Tahrirlash</button>
        </form>
    </div>

@endsection
