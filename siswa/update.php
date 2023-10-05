<?php
if (isset($_POST['update'])) {
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $nis          = $_POST['nis'];
    $siswa        = $_POST['siswa'];
    $jk           = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan_id = $_POST['jurusan_id'];
    //$foto           = $_POST['foto'];

    $sql = "UPDATE siswa SET nis='$nis', siswa='$siswa',jk='$jk',tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jurusan_id='$jurusan_id'  WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    // var_dump($sql);
    if ($query) {
        header('location: index.php?m=siswa');
    }else{
        include 'index.php?m=siswa';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '</script>';
    }
}else{
    echo '<script>window.history.back()</>';
}