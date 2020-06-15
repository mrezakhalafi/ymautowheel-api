<?php
require '../../database/Suspensi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $suspensi = new Suspensi;
    $update = $suspensi->updateMerek($id, $nama);
    if ($update) {
        $data['status'] = "1";
        $data['message'] = "Berhasil mengubah merek suspensi";
        echo json_encode($data);
    } else {
        $data['status'] = "0";
        $data['message'] = "Gagal mengubah merek suspensi";
        echo json_encode($data);
    }
} else {
    $data['status'] = "0";
    $data['message'] = "Ada kesalahan";
    echo json_encode($data);
}
