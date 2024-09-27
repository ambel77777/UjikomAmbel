@extends('layouts.app')
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Buku Tamu</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Instansi\Lembaga</th>
                <th>Tujuan</th>
                <th>Penerima</th>
                <th>No Telpon</th>
            </tr>
        </head>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->instansi_lembaga }}</td>
                        <td class="align-middle">{{ $rs->tujuan }}</td>
                        <td class="align-middle">{{ $rs->penerima }}</td>
                        <td class="align-middle">{{ $rs->no_telpon }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Rincian</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Ubah</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection