@extends('layouts.app')
@section('title', 'Yangi Kitob Qo\'shish')
@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Kitobni Tahrirlash
            <a class="text-danger" href="{{ route('books.index') }}" style="margin-left: 10px;">Ortga</a>
        </h2>

        <form method="POST" action="{{ route('books.update', ['book' => $book]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Kitob Nomi</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Kitob nomini kiriting"
                       value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Kitob Tavsifi</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          placeholder="Kitob tavsifini kiriting"
                          required>{{ $book->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="authors" class="form-label">Mualliflarni Tanlang</label>
                <select class="form-select" id="authors" name="authors[]" multiple>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}" selected>{{$author->name}}</option>
                    @endforeach
                </select>
                <div class="form-text">Bir nechta muallif tanlash uchun <strong>CTRL</strong> tugmasini bosib turib
                    tanlang.</div>
            </div>

            <button type="submit" class="btn btn-primary">Tahrirlash</button>
        </form>
    </div>

@endsection
