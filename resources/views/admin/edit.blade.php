<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <!-- Tambahkan link CSS Bootstrap di dalam tag head -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('admin.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="{{ $mahasiswa->nim }}" readonly><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama }}"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}"><br>
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"><br>
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender">
            <option value="Laki-laki" {{ $mahasiswa->gender === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $mahasiswa->gender === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select><br>
        <label for="usia">Usia:</label><br>
        <input type="number" id="usia" name="usia" value="{{ $mahasiswa->usia }}"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
