<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center my-4">Detail Mahasiswa</h3>
                        <hr>
                        
                        <h4>{{ $mahasiswa->nama }}</h4>
                        <p class="tmt-3">
                            NIM : <b>{{ $mahasiswa->nim }}</b><br>
                            Kelas : <b>{{ $mahasiswa->kelas }}</b><br>
                            Mata Kuliah : <b>{{ $mahasiswa->matakuliah }}</b>
                        </p>
                        
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-dark">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>