<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Penjualan</title>
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
            width: 60%;
            margin: 50px auto;
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
            color: #2e7d32;
            font-size: 2.5em;
            font-weight: bold;
        }
        label, select, input {
            font-size: 1.2em;
            margin: 10px 0;
        }
        select, input {
            padding: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #4caf50;
        }
        button {
            padding: 12px 20px;
            background: linear-gradient(90deg, #4caf50, #81c784);
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background: linear-gradient(90deg, #388e3c, #4caf50);
            transform: scale(1.05);
        }
        .product-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .product-container img {
            width: 100px;
            height: 100px;
            margin-right: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back-home {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #388e3c;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .back-home:hover {
            background: #2e7d32;
        }
    </style>
    <script>
        function updateImage() {
            var product = document.getElementById("produk").value;
            var productImage = document.getElementById("product-image");
            var images = {
                "rendang": "img/rendang.png",
                "jengkol": "img/jengkol.png",
                "sate": "img/sate.png"
            };
            productImage.src = images[product] || "";
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <p>Halaman ini digunakan untuk melakukan transaksi penjualan.</p>
        
        <form action="/proses-penjualan" method="POST">
            @csrf
            <label for="produk">Pilih Produk:</label>
            <select name="produk" id="produk" onchange="updateImage()">
                <option value="rendang">Rendang</option>
                <option value="jengkol">Jengkol Balado</option>
                <option value="sate">Sate Ayam</option>
            </select>
            
            <div class="product-container">
                <img src="{{ asset('img/rendang.jpg') }}" alt="Rendang">
            </div>
            
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah" value="1" min="1">
            <br>
            <button type="submit">Proses Penjualan</button>
        </form>
        <a href="{{ url('/') }}" class="back-home">Kembali ke Home</a>
    </div>
</body>
</html>
