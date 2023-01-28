@extends('app')

@section('content')

@include('carousel')
    <div class="book-list" style="margin-bottom: 5rem">

        @if (!empty($category))
            <h5>Category : {{ $category }}</h5>
        @endif

        @foreach ($books as $book)
        <div class="card shadow">
            <div class="img-wrapper">
                <div class="overlay">
                    <a href="/detail/{{ $book->id }}">detail</a>
                </div>
                {{-- <p class="badges">{{ $book->bookCategory }}</p> --}}
                <div class="img" style="background-image: url('{{ asset('assets/img/' . $book->image) }}')" ></div>
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
