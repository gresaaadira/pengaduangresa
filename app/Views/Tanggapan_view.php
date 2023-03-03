<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
Tanggapan
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-smf-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 nb-0 text-gray-800">Dashboard</h1>
</div>

<!--Content Row-->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="basic-card bg-info">
                <h1 style="color:tomato;"></h1>
                <div class="card-body bg-success">
                    <h3>Tanggapan</h3>
                    <a href="/pengaduan" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <form action="/pengaduan/filter" method="post" class="row">
                        <div class="col">
                            <select name="status" id="status" class="row"> 
                                <option value="">Semua</option>
                                <option value="0">Belum Ditanggapi</option>
                                <option value="proses">Sedang Diproses</option>
                                <option value="selesasi">selesasi</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <table class="table table-border">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Masyarakat</th>
                                    <th>Tanggal Tanggapan</th>
                                    <th>Tanggapan</th>
                                    <th>Aksi</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?= $this->endSection() ?>
