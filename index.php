<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP + MySQL</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="judul">
        <h2>CRUD PHP + MySQL</h2>
    </div>
    <section>
        <h4 id="pesan">
            <?php 
            if (isset($_GET['pesan'])) {
                $pesan  = $_GET['pesan'];
                if ($pesan == "input") {
                    echo "Data Berhasil di Tambahkan";
                }
            }
            ?>
        </h4>
        <a href="./pages/form_input.php" class="btn btn-success">Tambah Data</a>
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "koneksi.php";
                        $query  = mysqli_query($host, "Select * from user") or die(mysqli_error($host));
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['pekerjaan'] ?></td>
                        <td style="text-align: center;">
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>