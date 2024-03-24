<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tambahkan link CSS Bootstrap di dalam tag head -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('home') }}" method="GET">
                    <div class="form-group">
                        <label for="search">Cari Mahasiswa:</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan nama mahasiswa">
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
            <div class="col-md-6">
                <h5>Total Mahasiswa: {{ $total_mahasiswa }}</h5>
                <h5>Statistik Gender:</h5>
                <ul>
                    <li>Jumlah Mahasiswa Laki-laki: {{ $total_laki }}</li>
                    <li>Jumlah Mahasiswa Perempuan: {{ $total_perempuan }}</li>
                </ul>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Usia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->tanggal_lahir }}</td>
                        <td>{{ $mahasiswa->gender }}</td>
                        <td>{{ $mahasiswa->usia }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap sebelum tag penutup body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>