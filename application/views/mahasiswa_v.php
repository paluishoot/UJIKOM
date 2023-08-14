<!DOCTYPE html>
<html lang="en">
<head>
    <meta charsel="utf-8">
    <title>Mahasiswa oleh Ihksan Tajalian Noor [C030320125]</title>
</head>

<body>
    <h1>Selamat Datang di Web ihksan</h1>
        <table border="2">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nama Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->NIM ?></td>
                        <td><?php echo $row->nama_mhs ?></td>
                        <td><?php echo $row->nama_prodi ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>