<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
Masyarakat
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </h1 class="h3 mb-0 text gray-800">Dashboard</h1>
    </div>
    <!-- content row -->
    <div class="row">
        <div class="col ig-12">
            <div class="card">
                <div class="card-header text-white bg-gradient-primary">
                    <h3>masyarakat</h3>
                    <a href="" data-toggle="modal" data-target="#fmasyarakat" data-masyarakat="add" class="btn btn-outline-light">
                        <i class="fas fas-user-plus">&nbsp;Tambah Data</i><a>
                </div>
            </div class="card-body">
            <table class=" table table-border">
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 0;
                foreach ($masyarakat as $row) {
                    $data = $row['nik'] . "," . $row['nama'] . "," . $row['username'] . "," . $row['password'] . "," . $row['telp'] . "," . base_url('masyarakat/edit/' . $row['id_masyarakat']);
                    # code....
                    $no++
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['telp'] ?></td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#fmasyarakat" class="btn btn-warning" data-masyarakat="<?= $data ?>">edit</a>
                            <a href="/masyarakat/delete/<?= $row['id_masyarakat'] ?>"class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus Data?')"><i class="fa fa-delete"></i>Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <?php if (!empty(session()->getFlashdata = ("message"))) : ?>
        <div class="alert-alert-success">
            <?= session()->getFlashdata = ("message") ?>
        </div>
    <?php endif ?>
    <div class="modal fade" id="fmasyarakat" tabeindex="," aria-labelledby="exampleModall" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModall label">Form Masyarakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="close"></button>
                </div>
                <form action="" id="fmasyarakat" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" id="nik" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="number" name="telp" id="telp" value="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"><i>Save Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
    $('document').ready(function() {
        $("#fmasyarakat").on('show.bs.modal'),
            function(e) {
                // alert("asa");
                var button = $(e.relatedTarget);
                var data = button.data('masyarakat');
                if (data = "add") {
                    const barisdata = data.split(",");
                    $("#nama").val(barisdata[1]);
                    $("#username").val(barisdata[2]);
                    $("#password").val(barisdata[3]);
                    $("#telp").val(barisdata[4]);
                    $("#fmasyarakat").attr('action', barisdata[5]);
                    barisdata[6];
                    $("#ubahpassword").show();
                } else {
                    $("#nik").val("");
                    $("#nama").val("");
                    $("#username").val("");
                    $("#password").val("");
                    $("#telp").val("");
                    $("#fmasyarakat").attr('action', '/masyarakat');
                    $("#ubahpassword").hide();

                }
            }

    });
</script>
<?= $this->endSection() ?>