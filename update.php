<?php
    $id = $_GET["id"];
    require 'functions.php';
    $sql = mysqli_query($conn, "SELECT * FROM karyawan WHERE id = $id");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>
    <h1>Update Data Karyawan</h1>

    <form action="" method="POST">
        <table cellpadding="10" cellspacing="0" class="center">
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="name" value="<?php echo $data['name']; ?>" > </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input type="email" name="email" value="<?php echo $data['email']; ?>" > </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $data['address']; ?>" ></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> 
                    <select name="gender" id="gender">
                        <?php if(isset($data["gender"])){ $draft=$data["gender"]; echo $draft; } ?>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td><input type="text" name="position" value="<?php echo $data['position']; ?>" ></td>
            </tr>
            <tr>
                <td>Status</td>
                <td> 
                    <select name="status" id="status" value="<?php echo $data['status']; ?>" >
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="fulltime">Full Time</option>
                        <option value="parttime">Part Time</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="ubah">Update Data</button>
    </form>
</body>
</html>

<?php

    if(isset($_POST["ubah"])) {
        mysqli_query($conn, "UPDATE karyawan SET 
            name = '$_POST[name]',
            email = '$_POST[email]',
            address = '$_POST[address]',
            gender = '$_POST[gender]',
            position = '$_POST[position]',
            status = '$_POST[status]' 
            WHERE id = '$_GET[id]' ");
        echo "
            <script>
                alert('data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";

        
    }
?>


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