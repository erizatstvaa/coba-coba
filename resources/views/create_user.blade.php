<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<style>
        body {
            background-color: #ffe6f2;
            font-family: 'Arial', sans-serif;
            color: #ff69b4;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: pink;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff0f5;
            border: 2px solid #ffb6c1;
            border-radius: 10px;
            display: inline-block;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            font-size: 1.1em;
            color: #ff69b4;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ffb6c1;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #ff1493;
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
         .form-group {
        margin: 10px 0;
    }
    .form-group label {
        display: block;
        color: pink;
        margin-bottom: 5px;
    }
    .form-group input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: pink;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #333;
    }
    .form-group button:hover {
        background-color: white;
    }
</style>

@extends('layouts.app')

@section('content')

<a href="{{ route('user.index') }}" class="btn-add">List User</a>

    <div class="form">
        <h1>Create User</h1>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="@error('nama') input-invalid @enderror">
            @error('nama')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" value="{{ old('npm') }}" class="@error('npm') input-invalid @enderror">
            @error('npm')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="@error('kelas_id') input-invalid @enderror">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="pesan-error">{{ $message }}</div>
            @enderror
            <br><br>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" value="{{ old('foto') }}" class="@error('foto') input-invalid @enderror">
            @error('foto')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>


@endsection