<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah Data
            </div>
            <?php
            include '../../config/koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * FROM tb_terima_pelamar as tb_sp INNER JOIN tb_pelamar as tb_p on tb_sp.id_pelamar = tb_p.id_pelamar WHERE id_pelamar_terima='$id'");
            $jabatan = mysqli_query($koneksi, "SELECT * FROM tb_jabatan");
            $pelamar = mysqli_query($koneksi, "SELECT * FROM tb_pelamar");
            while($d = mysqli_fetch_array($data)){
                ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post" action="proses/ubahproses.php">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_pelamar_terima" value="<?= $d['id_pelamar_terima'];?>" required>
                                    <input type="hidden" class="form-control" name="id_pelamar" value="<?= $d['id_pelamar'];?>" required>
                                    <label>Nama Pelamar</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $d['nama_lengkap']; ?>" readonly>
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label>Kode Jabatan</label>
                                    <select class="form-control" name="id_jabatan" id="id_jabatan" required>
                                        <?php while($j = mysqli_fetch_array($jabatan)){ ?>
                                            <option value="<?= $j['id_jabatan']; ?>"><?= $j['nama_jabatan']; ?></option>
                                        <?php } ?>
                                    </select>
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

