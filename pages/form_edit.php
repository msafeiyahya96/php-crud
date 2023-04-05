<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP + MySQL</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="judul">
        <h2>Form Edit</h2>
    </div>
    <div class="form">
        <a href="../index.php" class="btn btn-success">Semua Data</a>
        <?php 
        include "../koneksi.php";
        $id = $_GET['id'];
        $query  = mysqli_query($host, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($host));
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <form action="../actions/edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <table class="form">
                <tr>
                    <th class="form">Nama</th>
                    <td class="form"><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <th class="form">Alamat</th>
                    <td class="form"><textarea name="alamat" cols="30" rows="10"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <th class="form">Pekerjaan</th>
                    <td class="form"><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>
                </tr>
                <tr>
                    <th class="form"></th>
                    <td class="form"><button>Submit</button></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>