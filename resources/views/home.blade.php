<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - POS</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8e063, #f0f8ff);
            text-align: center;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: linear-gradient(90deg, #4caf50, #81c784);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .header .menu-item {
            padding: 10px 15px;
            font-size: 1em;
            border-radius: 8px;
            box-shadow: none;
            transition: all 0.3s ease;
        }
        .header .menu-item:hover {
            transform: scale(1.05);
            background: #388e3c;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            color: #333;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: scale(1.02);
        }
        h1 {
            color: #e7eee8;
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #388e3c;
            font-size: 1.8em;
            font-weight: bold;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 15px 0;
        }
        .menu-item {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 15px;
            background: linear-gradient(90deg, #4caf50, #81c784);
            color: white;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: bold;
            font-size: 1.2em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .menu-item img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
            border-radius: 10px;
        }
        .menu-item:hover {
            transform: scale(1.1);
            background: linear-gradient(90deg, #388e3c, #4caf50);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>POS Application</h1>
        <div>
            <a href="{{ url('/user/123/name/JohnDoe') }}" class="menu-item"><img src="{{ asset('img/user.png') }}" alt="Profil Pengguna">Profil</a>
            
            <a href="{{ url('/sales') }}" class="menu-item"><img src="{{ asset('img/transaksi.png') }}" alt="Transaksi Penjualan">Transaksi</a>
        </div>
    </div>
    <div class="container">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{ url('/products/category/food-beverage') }}" class="menu-item"><img src="{{ asset('img/makanan.png') }}" alt="Makanan & Minuman">Produk Makanan & Minuman</a></li>
            <li><a href="{{ url('/products/category/beauty-health') }}" class="menu-item"><img src="{{ asset('img/kcntkn.jpg') }}" alt="Kecantikan & Kesehatan">Produk Kecantikan & Kesehatan</a></li>
            <li><a href="{{ url('/products/category/home-care') }}" class="menu-item"><img src="{{ asset('img/rumah.png') }}" alt="Perawatan Rumah">Produk Perawatan Rumah</a></li>
            <li><a href="{{ url('/products/category/baby-kid') }}" class="menu-item"><img src="{{ asset('img/bayi.png') }}" alt="Bayi & Anak">Produk Bayi & Anak</a></li>
        </ul>
    </div>
</body>
</html>
