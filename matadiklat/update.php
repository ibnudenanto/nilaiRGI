<?php
if (isset($_POST['update'])) {
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $matadiklat = $_POST['matadiklat'];
    $sks    = $_POST['sks'];

    $sql = "UPDATE matadiklat SET matadiklat='$matadiklat',sks='$sks' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    // var_dump($sql);
    if ($query) {
        header('location: index.php?m=matadiklat');
    }else{
        include 'index.php?m=matadiklat';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '</script>';
    }
}else{
    echo '<script>window.history.back()</>';
}