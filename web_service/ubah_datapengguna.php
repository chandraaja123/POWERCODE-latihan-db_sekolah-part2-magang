<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include "../koneksi.php"; // koneksi database

$response = array();

if (isset($_POST['id'])) {
    $id   = $_POST['id'];
    $nama = $_POST['nama'];
    $pwd  = $_POST['pwd'];
    
    $query = mysqli_query($conn,
        "UPDATE  tb_pengguna set nama='$nama', kata_kunci='$pwd' WHERE id_pengguna='$id' "
    );

    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Data berhasil diubah";
    } else {
        $response["success"] = 0;
        $response["message"] = "Gagal mengubah data";
    }
} else {
    $response["success"] = 0;
    $response["message"] = "ID tidak ditemukan";
}

echo json_encode($response);