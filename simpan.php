<!DOCTYPE html>
<html>
<head>
    <title>Hasil Transaksi Pulsa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Transaksi Pulsa</h2>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pembelian_pulsa";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $nama = $_POST['nama'];
        $nomor_hp = $_POST['nomor_hp'];
        $harga = $_POST['harga'];
        $harga_pulsa = $harga + 2000;

        $sql = "INSERT INTO transaksi (nama, nomor_hp, nominal) VALUES ('$nama', '$nomor_hp', $harga_pulsa)";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Transaksi berhasil!</p>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Nomor HP: $nomor_hp</p>";
            echo "<p>Harga Pulsa: Rp " . floor($harga_pulsa) . "</p>";
            echo "<p>Waktu Pembelian: " . date('Y-m-d H:i:s') . "</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
