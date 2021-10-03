<?php include '../../config/block_akses.php' ?>
<?php include 'uri.php' ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-grid.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bs_4/css/bootstrap-reboot.min.css.map">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Form Pengisian Data Karyawan</title>
</head>

<body style="background-color: royalblue;">
    <div class="container mt-auto">
        <div class="card mt-5 mb-5">
            <div class="h1 card-header text-center">Form Pengisian Data Karyawan</div>
            <div class="card-body">
                <a href="../../index.php"><button type="submit" class="btn btn-danger mt-3 mb-3">Kembali</button></a>
                <form method="post" action="proses/tambahproses.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><b>Nama Lengkap</b></label>
                        <input type="text" class="form-control" name="nama_lengkap">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label for="alamat"><b>Alamat</b></label>
                        <textarea class="form-control" name="alamat" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Tempat Lahir</b></label>
                        <input type="text" class="form-control" name="tmpt_lahir">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Tanggal Lahir</b></label>
                        <input type="date" class="form-control" name="tanggal_lahir">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Jenis Kelamin</b></label>
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
                        <label><b>Jenjang Pendidikan Terakhir Sekolah</b></label>
                        <select class="form-control" name="tamat_sekolah" id="tamat_sekolah">
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
                        <label><b>Jurusan</b></label>
                        <input type="text" class="form-control" name="jurusan">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Foto KTP</b></label>
                        <input type="file" class="form-control" name="ft_ktp">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Foto SKCK</b></label>
                        <input type="file" class="form-control" name="skck">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Ijazah</b></label>
                        <input type="file" class="form-control" name="ijazah">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Foto Transkip</b></label>
                        <input type="file" class="form-control" name="ft_transkip">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label><b>Nomer Telepon</b></label>
                        <input type="number" class="form-control" name="no_telp">
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <button type="submit" class="btn btn-danger" name="submit" value="submit">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

