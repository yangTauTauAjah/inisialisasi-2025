<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisialisasi 2024</title>
    <link rel="shortcut icon" href="{{ asset('inis/images/logoangkatan.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('inis/css/landing.css')}}">
    <style>
        .camera-container {
            background-image: url('{{ asset('inis/images/bg.jpg') }}');
        }

        .camera-lens {
            background-image: url('{{ asset('inis/images/logo.png') }}');
        }
    </style>
</head>
<body>
    <div class="camera-container">
        <div class="camera-lens">
            <button id="enterButton"></button>
        </div>
    </div>

    <script src="inis/js/landing.js"></script>

</body>
</html>
