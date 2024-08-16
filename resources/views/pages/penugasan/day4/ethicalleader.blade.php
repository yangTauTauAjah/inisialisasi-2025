<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THE JOURNEY OF AN ETHICAL LEADER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            position: relative;
            margin-bottom: 20px;
        }
        .header h1 {
            text-align: center;
            margin: 0;
        }
        .header .btn-back {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            color: white;
            border: none;
            font-size: 24px;
            padding: 0;
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
        p, ul {
            margin-bottom: 15px;
        }
        ul {
            list-style: disc;
            padding-left: 20px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        .info-link {
            color: #2980b9;
            text-decoration: none;
            font-weight: bold;
        }
        .info-link:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
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
        <button class="btn-back" onclick="window.history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            THE JOURNEY OF AN ETHICAL LEADER
        </h2>
        </div>
        <div class="forum-card accordion card-body">
            <h2>Ketentuan:</h2>
            <p>Mahasiswa baru wajib membuat video dengan ketentuan sebagai berikut:</p>
            <p>Mahasiswa baru akan diberikan sebuah permasalahan mengenai organisasi: </p>
            <ul>
                <li><strong>Studi Kasus 1:</strong> Flight, Slim, Laminas</li>
                <li><strong>Studi Kasus 2:</strong> Zend, Laravel</li>
                <li><strong>Studi Kasus 3:</strong> Symphony, Phalcon, Dart</li>
                <li><strong>Studi Kasus 4:</strong> Lumen, Flutter</li>
            </ul>
            <p>Mahasiswa diminta memberikan pendapat mengenai sudut pandang mereka sebagai pemimpin dan bagaimana menyikapi permasalahan tersebut.</p>
            <p><strong>Ketentuan Video:</strong></p>
            <ul>
                <li>Durasi video minimal 2 menit.</li>
                <li>Video diunggah di akun Instagram pribadi dengan caption bebas.</li>
                <li>Gunakan hashtag: <span class="highlight">#INISIALISASI24 #D4TeknikInformatika #BanggaVokasi #UNAIR #NAMAKELOMPOK</span></li>
            </ul>

            <h2>Pengumpulan Tugas</h2>
            <p>Pengumpulan tugas dilakukan dalam bentuk PDF yang berisi screenshot tugas beserta link video dengan format nama: <span class="highlight">NAMAKELOMPOK_3digitNIMterakhir_NamaTugas.pdf</span></p>
            <p>Tugas paling lambat dikumpulkan pada <span class="highlight">15 November 2024 pukul 19.00 WIB</span></p>
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
