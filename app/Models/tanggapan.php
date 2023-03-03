<?php
namespace App\Models;

use CodeIgniter\Model;

class tanggapan extends Model{
    protected $table ='tb_tanggapan';
    // Uncomment below if you want add primary key
    protected $primarykey= 'id_tanggapan';
    protected $allowedFields= ['id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'];
    protected $useSoftDeleted= true;
    protected $deletedFields= 'deleted_at';
}