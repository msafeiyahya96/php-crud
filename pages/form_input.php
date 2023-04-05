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
        <h2>Form Input</h2>
    </div>
    <div class="form">
        <a href="../index.php" class="btn btn-success">Semua Data</a>
        <form action="../actions/create.php" method="post">
            <table class="form">
                <tr>
                    <th class="form">Nama</th>
                    <td class="form"><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <th class="form">Alamat</th>
                    <td class="form"><textarea name="alamat" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <th class="form">Pekerjaan</th>
                    <td class="form"><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <th class="form"></th>
                    <td class="form"><button>Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>