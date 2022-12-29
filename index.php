<?php
    require 'functions.php';
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Karyawan PT. Dedikasi</h1>
    <a href="tambah.php" class="btn">Tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0" class="center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th colspan='2'>Aksi</th>
        </tr>
        <!-- print data from result -->
        <?php $i = 1; ?>
            <?php foreach($result as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["address"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["position"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td> <a href="hapus.php?id=<?=$row['id'];?>" class="button">Hapus</a> </td>
                <td> <a href="update.php?id=<?= $row['id'];?>" class="update">Update</a> </td>
                <?php $i++; ?>
            </tr>
            <?php endforeach; ?>
    
        
</body>
</html>

<style>
    body {
        background-color: #f2ece6;
        text-align: center;
        font-family: cursive;
        font-size: 0.7em;
    }

    table.center {
        margin-left: auto; 
        margin-right: auto;
    }

    h1{
        font-family: monospace;
        background-color: #856646;
        color: #f2ece6;
        border-style: solid;
        margin: 10px;
        padding: 10px;
        border-radius: 70px;
        font-size: 40px;

    }
</style>