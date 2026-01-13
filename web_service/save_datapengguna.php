<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include "../koneksi.php"; // koneksi database

$response = array();

    $nama = $_POST['nama'];
    $pwd  = $_POST['pwd'];
    
    $query = mysqli_query($conn,
        "INSERT INTO tb_pengguna (nama, kata_kunci) VALUES ('$nama', '$pwd')"
    );

    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Data berhasil disimpan";
    } else {
        $response["success"] = 0;
        $response["message"] = "Gagal Simpan data";
    }

echo json_encode($response);