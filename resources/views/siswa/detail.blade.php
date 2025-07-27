@extends('layout.master')

@section('content')
        <div class="container mt-5">
        <h2 class="mb-4 text-center">Detail Siswa</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title   ">ID Siswa: {{ $nomer }}</h5>
                <p class="card-text">Ini adalah detail siswa dengan ID: {{ $nomer }}</p>
                <a href="/siswa" class="btn btn-primary">Kembali ke Daftar Siswa</a>
            </div>
        </div>
@endsection