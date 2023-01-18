<!DOCTYPE html>
<html Lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto">
        <h4 class="text-center my-5">DAFTAR PESAN MASUK</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Pesan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "koneksi.php";
            $no =1;
            $query= mysqli_query($con, "select * from contactme");
            while ($data = mysqli_fetch_array($query))
            {
                ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td class="text-break"><?php echo $data['pesan']; ?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        
        <a href="index.php">Halaman Utama</a>
    </div>