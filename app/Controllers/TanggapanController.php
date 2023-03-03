<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tanggapan;
use App\Models\Pengaduan;

class TanggapanController extends BaseController{

    protected $tanggapan, $pengaduan, $db;
    function __construct()
    {
        $this->db = \config\Database::connect();
        $this->tanggapan= new Tanggapan();
        $this->pengaduan= new Pengaduan();

    }
    public function lapor()
    {
        $data['tanggapan'] = $this->tanggapan->findAll();
        return view('admin/laporan', $data);
    }
    public function simpan()
    {
        $data = [
            'tgl_tanggapan' => date('Y-m-d H:i:s'),
            'id_petugas' => session()->get('id_petugas'),
            'tanggapan' => $this->request->getPost('tanggapan'),
            'id_pengaduan' => $this->request->getPost('id_pengaduan'),
        ];
        $this->tanggapan->insert($data);
        $this->pengaduan->set('status','SELESAI');
        $this->pengaduan->where('id_pengaduan',$this->request->getPost('id_pengaduan'));
        $this->pengaduan->update();
        return redirect('pengaduan');

    }
    public function getTanggapan()
    {
        
        $data= $this->tanggapan->where('id_pengaduan',$this->request->getPost('id_pengaduan'))->findAll();
        return response()->setJSON($data);


    }
}
