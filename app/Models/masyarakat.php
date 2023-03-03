<?php
namespace App\Models;

use CodeIgniter\Model;

class masyarakat extends Model{
    protected $table ='tb_masyarakat';
    // Uncomment below if you want add primary key
    protected $primarykey = 'id_masyarakat';
    protected $allowedFields= ['nik','nama_masyarakat','username','password','telp'];
    protected $useSoftDeleted= true;
    protected $deletedFields= 'deleted_at';
}