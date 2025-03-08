<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Makanan & Minuman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a8e063, #f0f8ff);
            text-align: center;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 250px;
            text-align: left;
            overflow: hidden;
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card h3 {
            margin: 0;
            color: #2e7d32;
        }
        .card p {
            font-size: 14px;
            color: #555;
        }
        .price {
            font-weight: bold;
            color: #ff5722;
        }
        .back-home {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: linear-gradient(90deg, #38ef7d, #11998e);
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s, transform 0.2s;
        }
        .back-home:hover {
            background: linear-gradient(90deg, #11998e, #38ef7d);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Produk Makanan & Minuman</h1>
    <div class="container">
        <div class="card">
            <img src="{{ asset('img/rendang.jpg') }}" alt="Rendang">
            <div class="card-content">
                <h3>Rendang</h3>
                <p class="price">Rp.9000</p>
                <p>Rendang adalah makanan khas Padang.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/jengkol.jpg') }}" alt="Jengkol">
            <div class="card-content">
                <h3>Jengkol</h3>
                <p class="price">Rp.5000</p>
                <p>Jengkol adalah makanan khas Betawi dan populer di Sumatra dan Pasundan.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/nasigoreng.jpg') }}" alt="Nasi Goreng">
            <div class="card-content">
                <h3>Nasi Goreng</h3>
                <p class="price">Rp.12000</p>
                <p>Nasi goreng adalah makanan khas Jakarta yang populer hingga ke luar negeri.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/telurbalado.jpg') }}" alt="Telur Balado">
            <div class="card-content">
                <h3>Telur Balado</h3>
                <p class="price">Rp.7000</p>
                <p>Telur balado adalah hidangan telur dengan sambal khas Padang.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/sateayam.jpg') }}" alt="Sate Ayam">
            <div class="card-content">
                <h3>Sate Ayam</h3>
                <p class="price">Rp.15000</p>
                <p>Sate ayam dengan bumbu kacang khas Indonesia.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="{{ url('/') }}" class="back-home">Kembali ke Home</a>
    </div>
</body>
</html>
