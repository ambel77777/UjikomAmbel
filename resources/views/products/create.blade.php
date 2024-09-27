@extends('layouts.app')
@section('contents')
<h1 class="font-bold text-2xl ml-3"></h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            </div>
            <div class="form-group mb-3">
			      			<label class="label">tanggal</label>
			      			<input type="date" name="date" class="form-control" placeholder="Isilah Tanggal" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label">nama</label>
		              <input type="text" name="nama" class="form-control" placeholder="Isilah Nama Anda" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label">instansi/lembaga</label>
					 <input type="text" class="form-control" name="instansi_lembaga" placeholder="Isilah Instansi/Lembaga Anda" required>
						</div>
					<div class="form-group mb-3">
		            	<label class="label">tujuan</label>
		              <input type="text" class="form-control" name="tujuan" placeholder="Isilah Tujuan Anda" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label">penerima</label>
		              <input type="text" class="form-control" name="penerima" placeholder="Isilah Penerima Anda" required>
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label">no telpon</label>
		              <input type="number" class="form-control" name="no_telpon" placeholder="Isilah No Telpon Anda" required>
		            </div>
                </div>
            </div>
            <div class="form-group">
		            <button type="submit" class="form-control btn btn-primary rounded submit px-3">simpan</button>
		        </div>        
        </form>
    </div>
</div>
@endsection