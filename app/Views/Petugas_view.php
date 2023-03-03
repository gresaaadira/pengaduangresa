<?= $this->extend('layouts/admin')?>
<?= $this->section('title')?>
Petugas
<?= $this->endSection()?>
<?= $this->section('content')?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
</h1 class="h3 mb-0 text gray-800">Dashboard</h1>
    </div>
</div>
<!-- content row -->
<div class="row">
    <div class="col ig-12">
        <div class="card">
            <div class="card-header text-white bg-gradient-primary">
        <h3>petugas</h3>
        <a href="" data-toggle="modal" data-target="#fpetugas" data-petugas="add" class="btn btn-outline-light">
            <i class="fas fas-user-plus">&nbsp;Tambah Data</i><a>
    </div>
    </div class="card-body">
    <table class=" table table-border">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Tgl Pengaduan</th>
            <th>Foto</th>
            <th>Opsi</th>
            
        </tr>
        <?php
        $no=0;
        foreach($petugas as $row){
            $data=$row['id_petugas'].",".$data=$row['nama_petugas'].",".$data=$row['username'].",".$data=$row['password'].",".$data=$row['level'].",".base_url('petugas/edit/'.$row['id_petugas']);
            # code....
            $no++
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['id_petugas']?></td>
                <td><?=$row['nama_petugas']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['telp']?></td>
                <td><?=$row['level']?></td>
                <td>
                    <a href="" data-toggle="modal" data-target="#fpetugas" class= "btn btn-warning" data-petugas="<?=$data?>">edit</a>
                    <a href="/petugas/delete/<?=$row['id_petugas']?>" onclick="return confirm('Yakin Mau Hapus Data?')" class="fa fa-user-plus"></i>Petugas</a>
                 </td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>
    </div>
    </div>
    <?php if (!empty(session()->getFlashdata=("message"))):?>
        <div class="alert-alert-success">
            <?= session()->getFlashdata=("message")?>
    </div>
    <?php endif?>
    <div class="modal fade" id="fpetugas" tabeindex="," aria-labelledby="exampleModall"aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModall label">Form Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="close"></button>
                </div>
                <form action="" id=" edit petugas" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text number" name="nik" id="nik" value="" class="form-control">
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
                        <div class="form-group">
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level" value="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"><i>Save Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?= $this->endSection()?>
    <?= $this->section('script')?>
    <script>
        $('document').ready(function(){
            $("#fpetugas").on('show.bs.modal'),function(e){
                // alert("asa");
                var button=$(e.relatedTarget);
                var data=button.data('petugas');
                if(data="add"){
                    constbarisdata[1];
                    $("#nama").val(barisdata[2]);
                    $("#username").val(barisdata[3]);
                    $("#password").val(barisdata[4]);
                    $("#telp").val(barisdata[5]);
                    $("#editpetugas").attr('action');barisdata[6];
                    $("#ubahpassword").show();
                 } else{
                    $("#nik").val("");
                    $("#nama").val("");
                    $("#username").val("");
                    $("#password").val("");
                    $("#telp").val("");
                    $("#editpetugas").attr('action');
                    $("#ubahpassword").hide();
                      
                    }
                }

                });
                </script>
                <?= $this->endSection()?>
            

            