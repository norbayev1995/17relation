@extends('layouts.app')
@section('title', 'Yangi Muallif Qo\'shish')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Yangi Muallif Qo'shish
        <a class="text-danger" href="{{ route('authors.index') }}" style="margin-left: 10px;">Ortga</a>
    </h2>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Muallif Ismi</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Muallif ismini kiriting" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Muallif Emaili</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Muallif Emaili" required>
        </div>

        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</div>
@endsection
