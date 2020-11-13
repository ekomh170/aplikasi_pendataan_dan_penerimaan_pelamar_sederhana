<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Tambah <small>Data Pelamar</small>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="proses/tambahproses.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmpt_lahir" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="Laki - Laki" value="Laki - Laki" checked="">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan">Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenjang Pendidikan Terakhir Sekolah</label>
                                <select class="form-control" name="tamat_sekolah" id="tamat_sekolah" required>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Foto KTP</label>
                                <input type="file" class="form-control" name="ft_ktp" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Foto SKCK</label>
                                <input type="file" class="form-control" name="skck" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Ijazah</label>
                                <input type="file" class="form-control" name="ijazah" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Foto Transkip</label>
                                <input type="file" class="form-control" name="ft_transkip" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group">
                                <label>Nomer Telepon</label>
                                <input type="number" class="form-control" name="no_telp" required>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <button type="submit" class="btn btn-danger" name="submit" value="submit">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include '../../layout/footer.php';

