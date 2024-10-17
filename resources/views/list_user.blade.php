<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>

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
            background-color: #fff0f5; /* Very light pink for the table background */
            color: #333; /* Dark text for contrast */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow around table */
            border-radius: 10px;
            overflow: hidden;
        }

        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #ffcccc; /* Slightly darker pink for the header */
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #ffebee; /* Slightly darker background for even rows */
        }

        .table tr:hover {
            background-color: #ffccd5; /* Hover effect with soft pink */
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
</head>
<body>
    @extends('layouts.app')

    @section ('content')

    <a href="{{ route('user.create') }}" class="btn-add">Tambah User</a>

    <div class="container">
    <h1>Daftar Pengguna</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <a href="#" class="btn">Edit</a>
                    <a href="#" class="btn">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    @endsection
</body>
</html>
