@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Rincian Data Tamu</h1>
    <hr />

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Nama</label>
            <input type="text" class="form-control" value="{{ $product->nama }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Tanggal</label>
            <input type="text" class="form-control" value="{{ $product->tanggal }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Instansi/Lembaga</label>
            <input type="text" class="form-control" value="{{ $product->instansi_lembaga }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Tujuan</label>
            <input type="text" class="form-control" value="{{ $product->tujuan }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Penerima</label>
            <input type="text" class="form-control" value="{{ $product->penerima }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">No Telpon</label>
            <input type="text" class="form-control" value="{{ $product->no_telpon }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Dibuat Pada</label>
            <input type="text" class="form-control" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label font-weight-bold">Diperbarui Pada</label>
            <input type="text" class="form-control" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
</div>
@endsection
