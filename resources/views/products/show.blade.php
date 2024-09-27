@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Rincian Data</h1>
    <hr />
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" readonly>
        </div>
    </div>
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Instansi/Lembaga</label>
            <input type="text" name="Instansi_lembaga" class="form-control" placeholder="Instansi Lembaga" value="{{ $product->instansi_lembaga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tujuan</label>
            <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ $product->tujuan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Penerima</label>
            <input type="text" name="penerima" class="form-control" placeholder="Penerima" value="{{ $product->penerima }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No Telpon</label>
            <input type="text" name="no_telpon" class="form-control" placeholder="No Telpon" value="{{ $product->no_telpon }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Dibuat_pada" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <input type="text" name="upadated_at" class="form-control" placeholder="Diperbarui_Pada" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection