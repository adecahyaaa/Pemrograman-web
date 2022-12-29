<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>

    <form action="" method="POST">
        <table cellpadding="10" cellspacing="0" class="center">
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="name" required> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input type="email" name="email" required> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> 
                    <select name="gender" id="gender" required>
                        <option value="" disabled selected>Pilih Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td><input type="text" name="position" required></td>
            </tr>
            <tr>
                <td>Status</td>
                <td> 
                    <select name="status" id="status" required>
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="fulltime">Full Time</option>
                        <option value="parttime">Part Time</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
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