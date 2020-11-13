<?php 

include '../../layout/header.php';
include '../../layout/topbar.php';
include '../../layout/sidebar.php';

?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Tambah <small>Data Jabatan</small>
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
                        <form role="form" method="post" action="proses/tambahproses.php">
                            <div class="form-group">
                                <label>Nama Jabatan</label>
                                <input type="text" class="form-control" name="nama_jabatan" required>
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

