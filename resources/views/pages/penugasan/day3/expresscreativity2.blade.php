<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Express Creativity 2</title>
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
        ul {
            margin-bottom: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        .theme-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .theme-table th, .theme-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        .theme-table th {
            background-color: #2980b9;
            color: white;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
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
        <button class="btn-back" onclick="window.history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            Express Creativity 2
        </h2>
        </div>
        <div class="forum-card accordion card-body">
            <h2>Ketentuan:</h2>
        <p>Setiap kelompok akan berdiskusi mencari topik permasalahan dari tema yang telah dibagi dan diwajibkan untuk membuat sebuah poster digital yang berisi mengenai solusi tentang topik permasalahan yang telah ditentukan bersama kelompok. Tugas bersifat kelompok harus diselesaikan secara bersama dengan pembagian tugas yang adil.</p>

        <h2>Tema Kelompok:</h2>
        <table class="theme-table">
            <thead>
                <tr>
                    <th>Kelompok</th>
                    <th>Tema</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Flight</td>
                    <td>Sosial</td>
                </tr>
                <tr>
                    <td>Laravel</td>
                    <td>Pendidikan</td>
                </tr>
                <tr>
                    <td>Zend</td>
                    <td>Teknologi</td>
                </tr>
                <tr>
                    <td>Symphony</td>
                    <td>Sosial</td>
                </tr>
                <tr>
                    <td>Lumen</td>
                    <td>Pendidikan</td>
                </tr>
                <tr>
                    <td>Slim</td>
                    <td>Teknologi</td>
                </tr>
                <tr>
                    <td>Dart</td>
                    <td>Sosial</td>
                </tr>
                <tr>
                    <td>Phalcon</td>
                    <td>Pendidikan</td>
                </tr>
                <tr>
                    <td>Flutter</td>
                    <td>Teknologi</td>
                </tr>
                <tr>
                    <td>Laminas</td>
                    <td>Sosial</td>
                </tr>
            </tbody>
        </table>

        <h2>Format Poster:</h2>
        <ul>
            <li>Halaman 1 berisi poster yang telah dibuat bersama kelompok (sekreatif mungkin).</li>
            <li>Halaman 2 cover berisi topik permasalahan yang diangkat dan judul solusi yang telah rundingkan bersama kelompok dan membuat rincian mengenai penjabaran pembagian tugas dan partisipasi setiap anggota disertakan bukti.</li>
        </ul>

        <h2>Format Pengumpulan:</h2>
        <p>Poster dikumpulkan dalam bentuk PDF dengan format nama: <span class="highlight">NAMAKELOMPOK_Tema_Poster.pdf</span></p>
        <p>Tugas paling lambat dikumpulkan pada <span class="highlight">8 November 2024 pukul 19.00 WIB</span></p>
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
    </div>
</body>
</html>
