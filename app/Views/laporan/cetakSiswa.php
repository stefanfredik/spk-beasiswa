<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        th {
            text-align: center;
        }

        h3 {
            margin: 10px;
            text-align: center;
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <div>
        <h3><?= $title; ?></h3>
        <table id="table" class="table border" width="100%" colspacing="0">
            <thead>
                <tr class="align-middle">
                    <th>No</th>
                    <th>NISN</td>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</td>
                    <th>Kelas</td>
                    <th>Alamat</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $rank = 1;
                foreach ($dataSiswa as $ps) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $ps['nisn'] ?></td>
                        <td><?= $ps['nama_siswa'] ?></td>
                        <td><?= $ps['kelas'] ?></td>
                        <td><?= $ps['jenis_kelamin'] ?></td>
                        <td><?= $ps['alamat'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>