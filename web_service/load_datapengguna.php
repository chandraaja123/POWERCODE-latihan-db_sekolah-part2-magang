<?php
include "../koneksi.php";

header('Content-Type: application/json');

// cek apakah id_pengguna ada
if (!isset($_GET['id_pengguna'])) {
    echo json_encode([
        "sukses" => 0,
        "pesan" => "ID tidak dikirim"
    ]);
    exit;
}

$id = $_GET['id_pengguna'];

// query ambil data berdasarkan ID
$query = "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id'";
$result = mysqli_query($conn, $query);

// cek jumlah data
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);

    echo json_encode([
        "sukses" => 1,
        "record" => [
            [
                "nama" => $data['nama'],
                "kata_kunci" => $data['kata_kunci']
            ]
        ]
    ]);
} else {
    echo json_encode([
        "sukses" => 0,
        "pesan" => "Data tidak ditemukan"
    ]);
}
?>