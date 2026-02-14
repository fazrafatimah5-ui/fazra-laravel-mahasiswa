<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <h3>Edit Mahasiswa</h3>
                
                <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label>NAMA</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                    </div>

                    <div class="mb-3">
                        <label>KELAS</label>
                        <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}">
                    </div>

                    <div class="mb-3">
                        <label>MATA KULIAH</label>
                        <input type="text" name="matakuliah" class="form-control" value="{{ $mahasiswa->matakuliah }}">
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>