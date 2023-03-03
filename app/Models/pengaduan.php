<?php
namespace App\Models;

use CodeIgniter\Model;

class pengaduan extends Model{
    protected $table ='tb_pengaduan';
    // Uncomment below if you want add primary key
    protected $primarykey= 'id_pengaduan';
    protected $allowedFields= ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    protected $useSoftDeleted= true;
    protected $deletedFields= 'deleted_at';
}