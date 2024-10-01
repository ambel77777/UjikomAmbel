@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Edit Data Tamu</h1>
    <hr />

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tanggal" class="form-label font-weight-bold">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label font-weight-bold">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="instansi_lembaga" class="form-label font-weight-bold">Instansi/Lembaga</label>
                <input type="text" name="instansi_lembaga" class="form-control" placeholder="Instansi/Lembaga" value="{{ $product->instansi_lembaga }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="tujuan" class="form-label font-weight-bold">Tujuan</label>
                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ $product->tujuan }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="penerima" class="form-label font-weight-bold">Penerima</label>
                <input type="text" name="penerima" class="form-control" placeholder="Penerima" value="{{ $product->penerima }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="no_telpon" class="form-label font-weight-bold">No Telpon</label>
                <input type="number" name="no_telpon" class="form-control" placeholder="No Telpon" value="{{ $product->no_telpon }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-grid">
                <button type="submit" class="btn btn-warning btn-block font-weight-bold">Perbarui</button>
            </div>
        </div>
    </form>
</div>
@endsection
