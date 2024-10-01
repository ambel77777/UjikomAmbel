<!doctype html>
<html lang="en">
<head>
    <title>BUKU TAMU DISDIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="card">
                        <div class="card-body d-flex flex-column flex-md-row align-items-center">
                            <div>
                                <img src="{{ url('/template/images/logodisdik.png') }}" alt="logodisdik" class="img-fluid" width="100%" height="100%">
                            </div>
    
                            <div class="col-md-7">
                                <h3 class="text-center mb-4">BUKU TAMU</h3>
    
                                {{-- Pesan Error dan Sukses --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
    
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
    
                                <form action="{{ route('us.simpan') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Isilah Nama Anda" value="{{ old('nama') }}" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="instansi_lembaga">Instansi/Lembaga</label>
                                        <input type="text" name="instansi_lembaga" class="form-control" placeholder="Isilah Instansi/Lembaga Anda" value="{{ old('instansi_lembaga') }}" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="tujuan">Tujuan</label>
                                        <input type="text" name="tujuan" class="form-control" placeholder="Isilah Tujuan Anda" value="{{ old('tujuan') }}" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="penerima">Penerima</label>
                                        <input type="text" name="penerima" class="form-control" placeholder="Isilah Penerima Anda" value="{{ old('penerima') }}" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="no_telpon">No Telepon</label>
                                        <input type="number" name="no_telpon" class="form-control" placeholder="Isilah No Telepon Anda" value="{{ old('no_telpon') }}" required maxlength="15">
                                    </div>
    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="{{asset('https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>
</body>
</html>
