<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Input Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Koneksi ke database (gantilah dengan detail koneksi yang sesuai)

$host = "localhost";
$port = "5432";
$dbname = "mrmsystem";
$user = "postgres";
$password = "root";

$conn = new PDO("pgsql:host=$host port=$port dbname=$dbname user=$user password=$password");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nama = $_POST["nama]"];
    $jenis = $_POST["jenis]"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];

    // Simpan data ke database
    $stmt = $conn->prepare("INSERT INTO tabel_barang (nama, harga, jenis, deskripsi) VALUES (?, ?, ?)");
    $stmt->execute([$nama, $harga, $jenis, $deskripsi]);
    echo "Data barang berhasil disimpan!";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" required>

    <label for="harga_barang">Harga Barang:</label>
    <input type="number" name="harga_barang" required>

    <label for="stok_barang">Stok Barang:</label>
    <input type="number" name="stok_barang" required>

    <button type="submit">Simpan Data Barang</button>
</form>

</body>
</html>
