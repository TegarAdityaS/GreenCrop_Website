@extends('layouts.app')
 
@section('title', 'Edit Kategori')
 
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Edit</h4>
                </div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                <form action="{{ route('admin/kategori/update', $kategori->id_kategori) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}" >
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-danger">cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection