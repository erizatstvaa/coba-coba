<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
   <style>
        body {
            background-color: #ffe6f2;
            font-family: 'Arial', sans-serif;
            color: #ff69b4;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ff69b4;
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
    </style>
</head>
    
    <h1>Ini Halaman Create User</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>