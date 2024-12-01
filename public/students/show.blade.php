@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Siswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Email</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->nisn }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->birth }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->ayah }}</td>
                <td>{{ $student->ibu }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
