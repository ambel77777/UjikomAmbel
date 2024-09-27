@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Instansi\Lembaga</label>
                <input type="text" name="instansi_lembaga" class="form-control" placeholder="Instansi\Lemabaga" value="{{ $product->instansi_lembaga }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tujuan</label>
                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ $product->tujuan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Penerima</label>
                <input type="text" name="penerima" class="form-control" placeholder="Penerima" value="{{ $product->penerima }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No Telpon</label>
                <input type="number" name="no_telpon" class="form-control" placeholder="No Telpon" value="{{ $product->no_telpon }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Perbarui</button>
            </div>
        </div>
    </form>
@endsection