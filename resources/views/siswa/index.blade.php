<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $siswa)
            <h2>{{ $siswa->nama }}</h2>
            <p>{{ $siswa->kelas }}</p>
    @endforeach
</body>
</html>