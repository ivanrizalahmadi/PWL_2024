<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8e063, #f0f8ff);
            text-align: center;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: #2e7d32;
            text-align: center;
        }
        h1 {
            color: #2e7d32;
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 1.2em;
            font-weight: 500;
            color: #388e3c;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: linear-gradient(90deg, #4caf50, #81c784);
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back-button:hover {
            transform: scale(1.1);
            background: linear-gradient(90deg, #388e3c, #4caf50);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil User</h1>
        <p>ID User: {{ $id }}</p>
        <p>Nama User: {{ $name }}</p>
        <a href="{{ url('/') }}" class="back-button">Kembali ke Home</a>
    </div>
</body>
</html>
