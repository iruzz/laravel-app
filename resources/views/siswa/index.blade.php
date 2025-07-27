@extends('layout.master')

@section('content')
           <h2 class="mb-4 text-center">Daftar Siswa</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Umur</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->umur }}</td>
                        <td>{{ $siswa->created_at->format('d-m-Y H:i') }}</td>
                        <td>{{ $siswa->updated_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
@endsection