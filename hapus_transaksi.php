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

// Mengambil ID transaksi dari URL
$id_transaksi = $_GET['id'];

// Hapus transaksi berdasarkan ID
$sql = "DELETE FROM transaksi WHERE id = $id_transaksi";

if ($conn->query($sql) === TRUE) {
    echo "Transaksi berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
