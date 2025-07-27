<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #343a40;
            color: white;
            align-items: center;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

    @include('layout.navbar')

    <div class="container mt-5">
    @yield('content')
    </div>

    @include('layout.footer')
</body>
</html>
