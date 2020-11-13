<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Ubah <small>Data Jabatan</small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah Data
            </div>
            <?php
            include '../../config/koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * FROM tb_jabatan where id_jabatan='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post" action="proses/ubahproses.php">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_jabatan" value="<?= $d['id_jabatan'];?>">
                                    <label>Nama Jabatan</label>
                                    <input type="text" class="form-control" name="nama_jabatan" value="<?= $d['nama_jabatan'];?>" required>
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <button type="submit" class="btn btn-danger" name="submit" value="submit">Ubah Data</button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include '../../layout/footer.php';

