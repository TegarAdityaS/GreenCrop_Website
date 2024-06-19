@extends('layouts.app')
 
@section('title', 'Edit Produk')
 
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
                <form action="{{ route('admin/produk/update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="id_kategori">Kategori</label>
                        <select class="form-control @error('id_kategori') is-invalid @enderror" id="id_kategori" name="id_kategori">
                            {{-- <option value="">Pilih Kategori</option> --}}
                            @foreach($kategori as $datakate)
                                <option value="{{ $datakate->id_kategori }}" {{ (old('id_kategori') ?? $produk->id_kategori) == $datakate->id_kategori ? 'selected' : '' }}>{{ $datakate->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="id_tanaman">Jenis Tanaman</label>
                        <select class="form-control @error('id_tanaman') is-invalid @enderror" id="id_tanaman" name="id_tanaman">
                            {{-- <option value="">Pilih Tanaman</option> --}}
                            @foreach($tanaman as $datatanaman)
                                <option value="{{ $datatanaman->id_tanaman }}" {{ (old('id_tanaman') ?? $produk->id_tanaman) == $datatanaman->id_tanaman ? 'selected' : '' }}>{{ $datatanaman->nama_tanaman }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" value="{{ $produk->nama_produk }}" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="form-label custom-file-input">Choose file</label>
                        <input class="form-control" type="file" name="gambar" id="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-danger">cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection