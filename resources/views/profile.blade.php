<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: url('/assets/img/paternPink(1).JPG') no-repeat center center/cover;
            background-color: #f4f4f4;
            position: relative;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: pink;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #ff8080;
        }
        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }
        .profile-image img:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        
        .profile-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
        }
        .profile-picture {
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
        .profile-item {
            background-color: pink;
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            border-radius: 5px;
        }
        .profile-item span {
            font-weight: bold;
        }
                
        .info-item {
            background-color: pink;
            color: black;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            font-size: 16px;
        }
        .info-item-inline {
            background-color: #ffb3e6;
            padding: 10px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            color: black;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <a href="{{ route('user.index') }}" class="btn-back">Kembali ke List User</a>

    <div class="profile-container">
        <div class="profile-image">
            <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Image" width="200">
        </div>

        <div class="profile-info">
            <div class="info-item">Nama: {{ $user->nama }}</div>
            <div class="info-item">NPM: {{ $user->npm }}</div>
            <div class="info-item">Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
        </div>
    </div>
</body>
</html>