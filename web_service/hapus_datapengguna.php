<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include "../koneksi.php"; // koneksi database

$response = array();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = mysqli_query($conn,
        "DELETE FROM tb_pengguna WHERE id_pengguna='$id'"
    );

    if ($query) {
        $response["success"] = 1;
        $response["message"] = "Data berhasil dihapus";
    } else {
        $response["success"] = 0;
        $response["message"] = "Gagal menghapus data";
    }
} else {
    $response["success"] = 0;
    $response["message"] = "ID tidak ditemukan";
}

echo json_encode($response);