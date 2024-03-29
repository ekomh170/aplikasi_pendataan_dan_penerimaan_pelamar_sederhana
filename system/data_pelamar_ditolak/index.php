<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Kumpulan <small>Data Pelamar Yang Di Tolak</small>
        </h1>
    </div>
</div>
<a href="print/print.php"><button class="btn btn-danger">Print Data</button></a><br><br>
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
                    <th class="text-center">Aksi Menu Pendataan</th>
                </tr>
            </thead>
            <?php 
            include '../../config/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM tb_tolak_pelamar as tb_sp INNER JOIN tb_pelamar as tb_p on tb_sp.id_pelamar = tb_p.id_pelamar");
            while($d = mysqli_fetch_array($data)){
             ?>
             <tbody>                
                <td><?= $no++; ?></td>
                <td class="text-center"><?= $d['nama_lengkap']; ?></td>
                <td class="text-center"><img src="../../foto/ft_ktp/<?= $d['ft_ktp']; ?>" width='100' height='100'></td>
                <td class="text-center"><?= $d['jenis_kelamin']; ?></td>
                <td class="text-center"><?= $d['tanggal_lahir']; ?></td>
                <td class="text-center"><?= $d['no_telp']; ?></td>
                <td class="text-center">
                    <a name="submit" href="hapus.php?id=<?= $d['id_pelamar_tolak']; ?>"><button type="submit" name="submit" class="btn btn-danger">Hapus</button></a>
                </td>
            </tbody>
        <?php } ?>
    </table>
</div>
</div>
</div>
<!-- /. ROW  -->

<?php

include '../../layout/footer.php';

?>