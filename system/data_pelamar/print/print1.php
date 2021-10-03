<?php include '../../../config/uri.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Data Pelamar</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                <center>
                    Kumpulan <br>
                    <small>Data Pelamar</small>
                </center><br>
            </h1>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Tamat Sekolah</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <?php
                include '../../../config/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM tb_pelamar");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tbody>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nama_lengkap']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['tamat_sekolah']; ?></td>
                        <td><?= $d['jurusan']; ?></td>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript">
    window.print();
</script>

</html>