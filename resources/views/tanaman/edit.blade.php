@extends('layouts.app')
 
@section('title', 'Edit Tanaman')
 
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
                <form action="{{ route('admin/tanaman/update', $tanaman->id_tanaman) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="nama_tanaman">Nama Tanaman</label>
                        <input type="text" class="form-control" name="nama_tanaman" id="nama_tanaman" value="{{ $tanaman->nama_tanaman }}" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5">{{ old('deskripsi', $tanaman->deskripsi) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar_tanaman" class="form-label custom-file-input">Choose file</label>
                        <input class="form-control" type="file" name="gambar_tanaman" id="gambar_tanaman">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-danger">cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection