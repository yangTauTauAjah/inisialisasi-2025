<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Kating</title>
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
            margin-bottom: 15px;
        }
        ul {
            margin-left: 20px;
            margin-bottom: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4025d9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            Database Kating
        </h2>
        </div>
        <div class="forum-card accordion card-body">
            <h2>Mahasiswa Kampus Surabaya</h2>
        <p>Alur meminta biodata kating:</p>
        <ul>
            <li>Info tentang kontak kakak tingkat dapat dilihat di: <a href="https://bit.ly/DatabaseKating1Inisialisasi" target="_blank" class="highlight">https://bit.ly/DatabaseKating1Inisialisasi</a></li>
            <li>Mahasiswa baru memulai chat dengan menyapa, salam, dan memperkenalkan diri (nama panjang, nama panggilan, dan asal) terlebih dahulu, berkenalan, kemudian membuat jadwal pertemuan kakak tingkat.</li>
            <li>Sebelum membuat jadwal temu, kakak tingkat akan meminta feedback terlebih dahulu sebelum menyetujui untuk bertemu dengan adik tingkat.</li>
            <li>Setelah Mahasiswa Baru melakukan feedback yang diminta oleh kakak tingkat, mahasiswa baru diperbolehkan untuk mengatur jadwal pertemuan dengan kakak tingkat tersebut.</li>
            <li>Mahasiswa baru diwajibkan untuk foto bersama masing-masing kakak tingkat tersebut sebagai bukti dari penugasan.</li>
        </ul>
        <p>Point yang harus ada!</p>
        <ul>
            <li>Nama lengkap Kakak Tingkat: </li>
            <li>Nama panggilan Kakak Tingkat: </li>
            <li>Asal: </li>
            <li>Bidang di HIMTI: </li>
            <li>Tanda Tangan: </li>
        </ul>
        <h2>Mahasiswa Kampus Gresik</h2>
        <p>Alur meminta biodata kating:</p>
        <ul>
            <li>Info tentang kontak kakak tingkat dapat dilihat di: <a href="https://bit.ly/DatabaseKating1Inisialisasi" target="_blank" class="highlight">https://bit.ly/DatabaseKating1Inisialisasi</a></li>
            <li>Mahasiswa baru bergabung ke link Zoom yang telah disediakan.</li>
            <li>Setelah meminta izin untuk memulai percakapan, jika dipersilahkan maka mahasiswa baru memasuki break room yang telah disediakan sesuai arahan panitia.</li>
            <li>Mahasiswa baru memulai percakapan dengan menyapa, salam, dan memperkenalkan diri (nama panjang, nama panggilan, dan asal) terlebih dahulu, berkenalan, kemudian meminta izin untuk berfoto/menscreenshot dengan kakak tingkat yang telah menunggu di break room.</li>
            <li>Sebelum diizinkan kakak tingkat akan meminta feedback terlebih dahulu sebelum menyetujui.</li>
            <li>Setelah Mahasiswa Baru melakukan feedback yang diminta oleh kakak tingkat, mahasiswa baru diperbolehkan untuk menscreenshot dengan kakak tingkat tersebut.</li>
        </ul>
        <p>Point yang harus ada!</p>
        <ul>
            <li>Nama lengkap Kakak Tingkat: </li>
            <li>Nama panggilan Kakak Tingkat: </li>
            <li>Asal: </li>
            <li>Bidang di HIMTI: </li>
            <li>Tanda Tangan: </li>
        </ul>
        <h2>Pengumpulan Tugas</h2>
        <p>Pengumpulan dalam bentuk PDF berisi scan halaman booklet dengan format nama: <span class="highlight">NAMAKELOMPOK_3digitNIMterakhir_Nama_DBKating1.pdf</span></p>
        <p>Tugas paling lambat dikumpulkan pada <span class="highlight">…</span></p>
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
