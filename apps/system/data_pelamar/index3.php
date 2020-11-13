<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Kumpulan <small>Data Pelamar</small>
        </h1>
    </div>
</div>

<a href="tambah.php"><button class="btn btn-danger">Tambah Data</button></a><br><br>

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
                    <th>Nama Lengkap</th>
                    <th>Foto KTP</th>
                    <th>Foto SKCK</th>
                    <th>Foto Ijazah</th>
                    <th>Foto Transkip</th>
                    <th class="text-center">Aksi Menu Pendataan</th>
                </tr>
            </thead>
            <?php 
            include '../../config/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM tb_pelamar");
            while($d = mysqli_fetch_array($data)){
             ?>
             <tbody>                
                <td><?= $no++; ?></td>
                <td><?= $d['nama_lengkap']; ?></td>
                <td><img src="../../foto/ft_ktp/<?= $d['ft_ktp']; ?>" width='100' height='100'></td>
                <td><img src="../../foto/ft_transkip/<?= $d['ft_transkip']; ?>" width='100' height='100'></td>
                <td><img src="../../foto/ijazah/<?= $d['ijazah']; ?>" width='100' height='100'></td>
                <td><img src="../../foto/skck/<?= $d['skck']; ?>" width='100' height='100'></td>
                <td>
                    <a name="submit" href="proses/diterima.php?id=<?= $d['id_pelamar']; ?>"><button type="submit" name="submit" class="btn btn-warning">Diterima</button></a><br><br>
                    <a name="submit" href="ubah.php?id=<?= $d['id_pelamar']; ?>"><button type="submit" name="submit" class="btn btn-success">Ubah</button></a><br><br>
                    <a href="hapus.php?id=<?= $d['id_pelamar']; ?>"><button type="submit" name="submit" class="btn btn-danger">Hapus</button></a><br><br>
                    <a name="submit" href="proses/ditolak.php?id=<?= $d['id_pelamar']; ?>"><button type="submit" name="submit" class="btn btn-warning">Ditolak</button></a>
                </td>
                <td>
                    <a href="index.php"><button class="btn btn-primary">Kembali Ke Awal</button></a>
                </td>
                <td>
                    <a href="index2.php"><button class="btn btn-primary">Kembali</button></a>
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