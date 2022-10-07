<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Aplikasi Input Data Mahasiswa</h1>
        <h2 class="text-center">Fakultas Teknik - Universitas Hamzanwadi</h2>
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Form Input Data Mahasiswa
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" class="form-control" placeholder="Input Nim anda disini!">
                </div>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="Input Nama anda disini!">
                </div>

                <label for="">Alamat</label>
                <textarea class="form-control" placeholder="Input alamat anda disini!"></textarea>
                <div class="form-group">
                    <label for="">Program Studi</label>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value="">S1 - SI (Sistem Informasi)</option>
                        <option value="">S1 - TI (Teknik Informatika)</option>
                        <option value="">S1 - TK (Teknik Komputer)</option>
                        <option value="">S1 - TL (Teknik Lingkungan)</option>
                    </select>
                </div>
                <button class="btn btn-success">Simpan</button>
                <button class="btn btn-danger">Bersihkan</button>
            </div>
        </div>
    </div>
</body>

</html>