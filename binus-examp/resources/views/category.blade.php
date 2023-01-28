@extends('app')

@section('content')
@include('carousel')
<h4 class="cat p-2 shadow rounded ">Category : {{ $category->name }}</h4>

<div class="book-list" style="margin-bottom: 5rem">
    @foreach ($category->book as $book)
    <div class="card shadow">
        <div class="img-wrapper">
            <div class="overlay">
                <a href="/detail/{{ $book->id }}">detail</a>
            </div>
            {{-- <p class="badges">{{ $book->bookCategory }}</p> --}}
            <div class="img" style="background-image: url('{{ asset('assets/img/avatar.jpg') }}')"></div>
        </div>
        <div class="px-4">
            <p class="title">{{ $book->title }}</p>
            <p class="author">By {{ $book->author }}</p>
        </div>
        <div class="mb-4 mx-4">
            <a href="/detail/{{ $book->id }}" class="btn-sm btn-danger">detail</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
