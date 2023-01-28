@extends('app')

@section('content')
<div class="container mt-2">
    @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {!! \Session::get('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
<div class="container p-4 rounded shadow mt-2">
    <h4 class="text-center">Add Book</h4>
    <form action="{{ route('add_book') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input required name="title" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="category_id" required class="form-control mb-2">
                <option value="">Category</option>
                @foreach ($categories as $categori)
                <option value="{{$categori->id}}">{{ $categori->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Publisher</label>
            <select  name="publisher_id" required class="form-control mb-2">
                <option value="">Publisher</option>
                @foreach ($publishers as $publisher)
                <option value="{{$publisher->id}}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input required name="author" type="text" class="form-control" id="exampleInputPassword1"
                placeholder="author">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Years</label>
            <input required name="years" type="text" class="form-control" id="exampleInputPassword1"
                placeholder="Nomor telepon">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Synopsis</label>
            <textarea required name="synopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input required name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
</div>

@endsection
