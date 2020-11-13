<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Kumpulan <small>Data Jabatan</small>
        </h1>
  </div>
</div>

<a href="tambah.php"><button class="btn btn-danger">Tambah Data</button></a><br><br>

<div class="panel panel-default">
    <!-- <div class="panel-heading">
        Jabatan
    </div>  -->
    <div class="panel-body">
     <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <?php 
            include '../../config/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM tb_jabatan");
            while($d = mysqli_fetch_array($data)){
             ?>
             <tbody>
                <td><?= $no++; ?></td>
                <td><?= $d['nama_jabatan']; ?></td>
                <td class="text-center">
                    <a href="ubah.php?id=<?= $d['id_jabatan']; ?>"><button class="btn btn-success">Ubah</button></a>
                    <a href="hapus.php?id=<?= $d['id_jabatan']; ?>"><button class="btn btn-danger">Hapus</button></a>
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