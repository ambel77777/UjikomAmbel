@extends('layouts.app')
@section('contents')

<div class="container my-5">
    <h1 class="font-weight-bold text-center mb-4">Formulir Pengisian Buku Tamu</h1>
    <hr />

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label for="date" class="form-label font-weight-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Isilah Tanggal" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="nama" class="form-label font-weight-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Isilah Nama Anda" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="instansi_lembaga" class="form-label font-weight-bold">Instansi/Lembaga</label>
                    <input type="text" class="form-control" name="instansi_lembaga" placeholder="Isilah Instansi/Lembaga Anda" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="tujuan" class="form-label font-weight-bold">Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" placeholder="Isilah Tujuan Anda" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="penerima" class="form-label font-weight-bold">Penerima</label>
                    <input type="text" class="form-control" name="penerima" placeholder="Isilah Penerima Anda" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="no_telpon" class="form-label font-weight-bold">No Telpon</label>
                    <input type="number" class="form-control" name="no_telpon" placeholder="Isilah No Telpon Anda" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-block font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
