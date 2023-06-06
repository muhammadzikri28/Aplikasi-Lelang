<?php
session_start();
$email = $_SESSION['email'];
$act = $_GET['act'];
include '../../config/koneksi.php';

if($act == 'active')
{
    $id = $_GET['id'];
    $query = "UPDATE admin SET status = 'aktif' WHERE id = '$id'";
    $execute = mysqli_query($koneksi,$query);

    if($execute){
        echo "<script>alert('User Diaktifkan.');window.location='../main.php?page=member';</script>";
    }
}
elseif($act == 'inactive')
{
    $id = $_GET['id'];
    $query = "UPDATE admin SET status = 'nonaktif' WHERE id = '$id'";
    $execute = mysqli_query($koneksi,$query);

    if($execute){
        echo "<script>alert('User Dinonaktifkan.');window.location='../main.php?page=member';</script>";
    }
}
elseif($act == 'hapus')
{
    $id = $_GET['id'];
    $query = "DELETE FROM admin WHERE id = '$id'";
    $execute = mysqli_query($koneksi,$query);

    if($execute){
        echo "<script>alert('Data berhasil dihapus.');window.location='../main.php?page=member';</script>";
    }
} 
elseif($act == 'update')
{
    $id = $_POST['id'];

    $nama    = $_POST['nama'];
    $email       = $_POST['email'];
    $nomor_hp    = $_POST['nope'];
    $alamat     = $_POST['alamat'];
    
    $query = "UPDATE admin SET
    nama   = '$nama',
    email = '$email',
    nope  = '$nomor_hp',
    alamat = '$alamat' WHERE id = $id";

    $execute = mysqli_query($koneksi,$query);

    if($execute){
        echo "<script>alert('Data berhasil diubah.');window.location='../main.php?page=user';</script>";
    }
}
?>