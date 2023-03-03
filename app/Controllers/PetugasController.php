<?php
namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Petugas;

class PetugasController extends BaseController{
    protected $petugas;
    function __construct()
    {
        $this->petugas= new petugas();
    }
    public function index()
    {
        $data['petugas']= $this->petugas->findAll();
        return view('petugas_view',$data);
    }
    public function create()
    {
        return view('fpetugas_view');
    }
    public function save()
    {
        $data=array(
            'nama_petugas'=>$this->request->getPost('nama'),
            'petugas'=>$this->request->getPost('petugas'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
        );
        $this->petugas->insert($data);
        session()->setFlashdata("message data berhasil di simpan");
        return $this->response->redirect('/petugas');
    }
    public function edit($id)
    {
        if($this->request->getPost('ubah password')==null){
            $data=array(
            'nama_petugas'=>$this->request->getPost('nama'),
            'petugas'=>$this->request->getPost('petugas'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            );
            $this->petugas->update($id,$data);
            }
            else
            {
            $data=array(
            'nama_petugas'=>$this->request->getPost('nama'),
            'petugas'=>$this->request->getPost('petugas'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            );
            $this->petugas->update($id,$data);        
            }
            session()->setFlashdata("message data berhasil di rubah");
            return $this->response->redirect('/petugas');
        }
        public function delete($id)
        {
            $this->petugas->delete($id);
            session()->setFlashdata("message data berhasil di hapus");
            return $this->response->redirect('/petugas');
        }

        }

