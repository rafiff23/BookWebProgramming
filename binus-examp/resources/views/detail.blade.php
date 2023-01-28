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
<div class="detail-container">
    <div class="img" style="background-image: url('{{ asset('assets/img/avatar.jpg') }}');"></div>
    <div class="detail-content shadow p-4 mt-4">
        <p class="author">By {{ $book->author }} | {{ $book->year }}</p>
        <h3 class="title">{{ $book->title }}</h3>
        <p class="description">{{ $book->synopsis }}</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#beli">Beli Buku</button>
    </div>
</div>

<div class="modal fade" id="beli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beli Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('transaction') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input required name="nama" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input required name="alamat" type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nomor Telepon</label>
                        <input required name="phone" type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Nomor telepon">
                    </div>
                    <input name="id_book" value="{{$book->id}}" type="hidden">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
