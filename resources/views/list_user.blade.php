@extends('layouts.app')

@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF0DB;
        }
        h1 {
            color: #ff9999;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff0f5; 
            color: #333;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
            border-radius: 10px;
            overflow: hidden;
        }
        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table th {
            background-color: #ffcccc; 
            font-weight: bold;
        }
        .table tr:nth-child(even) {
            background-color: #ffebee; 
        }
        .table tr:hover {
            background-color: #ffccd5; 
        }
        .table td {
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            color: white;
            background-color: #ff9999;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-add{
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            color: white;
            background-color: #ff9999;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-add:hover {
            background-color: #fff0f5;
        }
        .btn:hover {
            background-color: #ff8080;
        }
        .add-user-btn {
            margin-bottom: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>

<!-- Tombol Tambah Pengguna Baru -->
<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
<br><br><br><br><br><br>
<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                <td>
                @if($user->foto)
                <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna" width="100">
            @else
                <span>Foto tidak tersedia</span>
            @endif
                </td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>

                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection