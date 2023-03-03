<?php
namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Masyarakat;

class MasyarakatController extends BaseController{
    protected $masyarakat;
    function __construct()
    {
        $this->masyarakat= new masyarakat();
    }
    public function index()
    {
        $data['masyarakat']= $this->masyarakat->findAll();
        return view('masyarakat_view',$data);
    }
    public function create()
    {
        return view('fmasyarakat_view');
    }
    public function save()
    {
        $data = array(
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
        );
        $this->masyarakat->insert($data);
        session()->setFlashdata("message data berhasil di simpan");
        return $this->response->redirect('/masyarakat');
    }
    public function edit($id)
    {
        if($this->request->getPost('ubah password')==null){
            $data=array(
                'nik'=>$this->request->getPost('nik'),
                'nama'=>$this->request->getPost('nama'),
                'username'=>$this->request->getPost('username'),
                'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
                'telp'=>$this->request->getPost('telp'),
            );
            $this->masyarakat->update($id,$data);
            }
            else
            {
            $data=array(
                'nik'=>$this->request->getPost('nik'),
                'nama'=>$this->request->getPost('nama'),
                'username'=>$this->request->getPost('username'),
                'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
                'telp'=>$this->request->getPost('telp'),
            );
            $this->masyarakat->update($id,$data);        
            }
            session()->setFlashdata("message data berhasil di rubah");
            return $this->response->redirect('/masyarakat');
        }
        public function delete($id)
        {
            $this->masyarakat->delete($id);
            session()->setFlashdata("message data berhasil di hapus");
            return $this->response->redirect('/masyarakat');
        }

        }

