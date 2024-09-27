<!doctype html>
<html lang="en">
<head>
    <title>BUKU TAMU DISDIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">SELAMAT DATANG</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url({{ url('/template/images/logodisdik.png') }});"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">DINAS PENDIDIKAN</h3>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('us.simpan') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" placeholder="Isilah Tanggal" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isilah Nama Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="instansi">Instansi/Lembaga</label>
                                <input type="text" name="instansi_lembaga" class="form-control" placeholder="Isilah Instansi/Lembaga Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="tujuan">Tujuan</label>
                                <input type="text" name="tujuan" class="form-control" placeholder="Isilah Tujuan Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="penerima">Penerima</label>
                                <input type="text" name="penerima" class="form-control" placeholder="Isilah Penerima Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="no_telpon">No Telepon</label>
                                <input type="number" name="no_telpon" class="form-control" placeholder="Isilah No Telepon Anda" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/popper.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>
</body>
</html>
