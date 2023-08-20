<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Pulsa</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px; /* Adjust the width as needed */
            height: auto;
        }
        form {
            text-align: left;
        }
        label {
            font-weight: bold;
            color: #333333;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            color: #555555;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            background: url('arrow-down.png') no-repeat right;
            background-size: 20px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        #label_harga_pulsa {
            font-weight: bold;
            color: #333333;
        }
        .contact-cs {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888888;
        }
        .contact-cs a {
            color: #007bff;
            text-decoration: none;
        }
        .fans-rrq {
            text-align: center;
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://1.bp.blogspot.com/-_VH93xh_EJk/YFRqPNuIfEI/AAAAAAAAB-8/aiz90xV2OeoOiodaAb0Bf6Hty2pUixYTQCNcBGAsYHQ/s2048/RRQ.png" alt="Logo">
        </div>
        <h2>Form Pembelian Pulsa</h2>
        <form method="post" action="simpan.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" name="nomor_hp" required>

            <label for="harga">Pilih nominal pulsa:</label>
            <select name="harga" id="harga" required onchange="updateHargaPulsa()">
                <option value="" disabled selected>Pilih nominal pulsa</option>
                <option value="5000">Rp 5,000</option>
                <option value="10000">Rp 10,000</option>
                <option value="20000">Rp 20,000</option>
                <option value="50000">Rp 50,000</option>
                <option value="100000">Rp 100,000</option>
                <!-- Add more options as needed -->
            </select>

            <label id="label_harga_pulsa"></label>
            
            <input type="submit" value="Beli Pulsa">
        </form>
        <div class="contact-cs">
            Hubungi Customer Service kami <a href="https://api.whatsapp.com/send?phone=6285730224130" target="_blank">di sini</a>.
        </div>
        <div class="fans-rrq">
            *Khusus Fans RRQ
        </div>
    </div>
    <script>
        function updateHargaPulsa() {
            var selectedHarga = document.getElementById("harga").value;
           
