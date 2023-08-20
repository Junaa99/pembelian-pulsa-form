<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .empty-row td {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h2>Riwayat Transaksi</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Nominal Pulsa</th>
            <th>Tanggal Transaksi</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pembelian_pulsa";

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Mengambil data dari tabel transaksi dan mengurutkan berdasarkan tanggal transaksi
        $sql = "SELECT * FROM transaksi ORDER BY tanggal_transaksi DESC";
        $result = $conn->query($sql);

        // Menampilkan data dalam bentuk tabel
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['nomor_hp'] . "</td>";
                echo "<td>" . $row['nominal'] . "</td>";
                echo "<td>" . $row['tanggal_transaksi'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo '<tr class="empty-row"><td colspan="5">Tidak ada transaksi</td></tr>';
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </table>
</body>
</html>
