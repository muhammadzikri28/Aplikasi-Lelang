<?php
elseif($act == 'hapus')
{
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id = '$id'";
    $execute = mysqli_query($koneksi,$query);

    if($execute){
        echo "<script>alert('Data berhasil dihapus.');window.location='../main.php?page=user';</script>";
    }
}
?>