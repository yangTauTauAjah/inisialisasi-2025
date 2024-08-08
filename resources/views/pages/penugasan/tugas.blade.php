<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan</title>
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
        }
        .card-body {
            padding: 1.5rem;
            flex: 1 1 auto;
        }
        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar input {
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #6c63ff;
            color: white;
        }
        .forum-post {
            margin-top: 10px;
        }
        .post-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .post-meta {
            color: #777;
            font-size: 0.875rem;
        }
        .accordion {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .card-body {
            padding: 1.5rem;
            flex: 1 1 auto;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            background-color: #ffffff;
            padding: 10px;
            border-bottom: 2px solid #e0e0e0;
        }
        .tab {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .tab:hover {
            background-color: #f0f0f0;
        }
        .active-tab {
            border-bottom: 2px solid #007bff;
            font-weight: bold;
        }
        .accordion {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .accordion-header {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            cursor: pointer;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .accordion-content {
            display: none;
            padding: 15px;
            border-top: 1px solid #e0e0e0;
        }
        .accordion-content.visible {
            display: block;
        }
        .arrow {
            transform: rotate(0deg);
            transition: transform 0.3s;
        }
        .arrow-up {
            transform: rotate(180deg);
        }
        .assignments {
            display: flex;
            gap: 20px;
        }
        .assignment {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            flex: 1;
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
            Inisialisasi 2024
        </h2>
        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Pra</div>
            </div>
            <div class="accordion-content">
                <div class="">
                    <p>Pengumuman: Membawa Snack roti ketawa dan minuman band</p>
                </div>
                <div class="assignment">
                    <p>Id Card</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Nama dan Logo angkatan</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Booklet</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
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
                </div>
            </div>
        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Day 1</div>
            </div>
            <div class="accordion-content">
                <div class="">
                    <p>Pengumuman: Membawa Snack Bantal & Minuman Bisa Tambah</p>
                </div>
                <div class="assignment">
                    <p>Video Prodi</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Mencatat Materi</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Database Kating</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
            </div>
        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Day 2</div>
            </div>
            <div class="accordion-content">
                <div class="">
                    <p>Pengumuman: Membawa Snack Confess & Air Dugem</p>
                </div>
                <div class="assignment">
                    <p>Poster Digital</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Vlog Mini</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Mencatat Materi</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
            </div>

        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Day 3</div>
            </div>
            <div class="accordion-content">
                <div class="">
                    <p>Pengumuman: Membawa Ciki Simpan Dulu & Air Lumpur</p>
                </div>
                <div class="assignment">
                    <p>Mencatat Materi</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Essay FGD</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
            </div>
        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Day 4</div>
            </div>
            <div class="accordion-content">
                <div class="">
                    <p>Pengumuman: Membawa Snack Pipa Berlumpur & Minuman Bukan Milikku</p>
                </div>
                <div class="assignment">
                    <p>Mencatat Materi</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Video Pemimpin</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
                <div class="assignment">
                    <p>Database Kating 2</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
            </div>
        </div>
        <div class="forum-card accordion card-body" onclick="toggleAccordion(this)">
            <div class="forum-post">
                <div class="post-title">Inisialisasi - Day 5</div>
            </div>
            <div class="accordion-content">
                <div class="assignment">
                    <p>Revisi Tugas</p>
                    <a href="#" class="btn">Buka Tugas</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(element) {
            const content = element.querySelector('.accordion-content');
            const arrow = element.querySelector('.arrow');
            content.classList.toggle('visible');
            arrow.classList.toggle('arrow-up');
        }
    </script>
</body>
</html>
