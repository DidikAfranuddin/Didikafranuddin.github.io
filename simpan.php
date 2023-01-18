<?php
//connect database
include 'koneksi.php';
//$con=mysqli_connect("localhost","root","","uas-annisa")
$name = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//check form kosong
if(empty ($name) || empty ($email) || empty($pesan))
{
    echo "Form ada yang kosong, silahkan isi ulang";
    }
    else{
        $query = mysqli_query($con,"insert into contactme set nama = '$name', email = '$email', pesan = '$pesan'");
        if ($query == TRUE){
            echo "Data berhasil ditambahkan. silahkan liaht daftar <a href='pesan.php'>komentar</a>";
        }
        else{
            echo "error";
    }
}