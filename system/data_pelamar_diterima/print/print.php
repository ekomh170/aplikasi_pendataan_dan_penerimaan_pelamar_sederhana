<?php include '../../../config/uri.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Data Pelamar DiTerima</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                <center>
                    Kumpulan <br>
                    <small>Data Pelamar DiTerima</small>
                </center><br>
            </h1>
        </div>
    </div>
    <div class="panel panel-default">
        <!-- <div class="panel-heading">
        Responsive Table Example
    </div> -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Foto KTP</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Tanggal Lahir</th>
                            <th class="text-center">Nomer Telepon</th>
                            <th class="text-center">Nama Jabatan</th>
                        </tr>
                    </thead>
                    <?php
                    include '../../../config/koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_terima_pelamar as tb_sp INNER JOIN tb_pelamar as tb_p on tb_sp.id_pelamar = tb_p.id_pelamar INNER JOIN tb_jabatan as tb_jb on tb_sp.id_jabatan=tb_jb.id_jabatan");

                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tbody>
                        <td><?= $no++; ?></td>
                        <td class="text-center"><?= $d['nama_lengkap']; ?></td>
                        <td class="text-center"><img src="../../../foto/ft_ktp/<?= $d['ft_ktp']; ?>" width='100'
                                height='100'></td>
                        <td class="text-center"><?= $d['jenis_kelamin']; ?></td>
                        <td class="text-center"><?= $d['tanggal_lahir']; ?></td>
                        <td class="text-center"><?= $d['no_telp']; ?></td>
                        <td class="text-center"><?= $d['nama_jabatan']; ?></td>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
window.print();
</script>

</html>