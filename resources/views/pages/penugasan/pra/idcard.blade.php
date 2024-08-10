<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas ID Card Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            border: 1px solid #e9ecef!important;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            border-radius: .375rem;
            background-color: #fff;
            background-clip: border-box;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #6c63ff;
            color: white;
            padding: 20px;
            text-align: center;
            text-align: center;
            margin-bottom: 20px;
        }
        .accordion {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .card-body {
            padding: 1.5rem;
            flex: 1 1 auto;
        }
        h2 {
            color: #2980b9;
            margin-bottom: 20px;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
        }
        p {
            line-height: 1.6;
        }
        ul {
            margin-left: 20px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        .group-colors {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .group-colors div {
            width: 30%;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4025d9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    {{-- <div class="header">
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            ID Card
        </h2>
        </div>
        <div class="forum-card accordion card-body">

        </div>
    </div> --}}
    <div class="header">
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            ID Card
        </h2>
        </div>
        <div class="forum-card accordion card-body">
            <p>Mahasiswa baru D4 Teknik Informatika angkatan 2023 <span class="highlight">WAJIB</span> membuat ID Card dengan ketentuan:</p>
        <ul>
            <li>ID Card dibuat dari template design yang sudah disiapkan oleh Panitia INISIALISASI 2024.</li>
            <li>ID Card diprint pada kertas buffalo coklat dengan ukuran.</li>
            <li>ID Card di laminating dan dilubangi pada atas ujung bagian kanan dan kiri.</li>
        </ul>
        <h2>Ketentuan Foto</h2>
        <ul>
            <li>Foto gaya bebas, sopan dengan ukuran 3x4.</li>
            <li>Berkerudung hitam (bagi yang berkerudung).</li>
            <li>Memakai baju dengan warna sesuai dengan warna kelompok, yaitu:</li>
        </ul>
        <div class="group-colors">
            <div>Kelompok Merah</div>
            <div>Kelompok Biru</div>
            <div>Kelompok Hijau</div>
        </div>
        <h2>Tali ID CARD</h2>
        <p>Tali ID CARD menggunakan pita yang terdiri dari 2 warna wajib (biru tua dan putih) ditambah dengan warna kelompok.</p>
        <p>Dihimbau bagi setiap kelompok memakai tali dengan warna yang senada. Ketiga warna tersebut buat menjadi lanyard berbentuk kepang.</p>
        <h2>Name Tag</h2>
        <p>Name Tag ditulis tangan (manual) yang berisi data diri sebagai berikut:</p>
        <ul>
            <li>Nama lengkap</li>
            <li>Nama panggilan</li>
            <li>Nama kelompok</li>
        </ul>
        <h2>Pengumpulan Tugas</h2>
        <p>Pengumpulan dalam bentuk PDF yang berisi foto diri menggunakan ID Card dengan format nama: <span class="highlight">NAMAKELOMPOK_3digitNIMterakhir_Nama_IDCARD.pdf</span></p>
        <p><span class="highlight">Tugas paling lambat dikumpulkan pada …</span></p>
        <div class="container mt-5">
            <h2 class="text-center">Upload File</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
                <div class="alert alert-info">
                    <strong>Uploaded File:</strong> {{ Session::get('file') }}
                </div>
            @endif
            <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file" class="form-label">Choose File</label>
                    <input class="form-control" type="file" id="file" name="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        <div class="footer">
            &copy; 2024 INISIALISASI - D4 Teknik Informatika
        </div>
        </div>
    </div>
</body>
</html>
