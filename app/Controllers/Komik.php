<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use App\Models\KomikModel;
use Config\App;
use Config\Validation;

class Komik extends BaseController
{
    protected $komikModel;

    public function __construct(){
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        
        // $komik = $this->komikModel->findAll();
        $data = [
            'tittle' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik(),
        ];

        
        return view('komik/index',$data);
    }

    public function detail($slug){
        // $komik = $this->komikModel->where(['slug' => $slug] )->first();
        
        $data = [
            'tittle' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        // jika judul komik tidak ada di tabel
        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan');
        }

        return view('komik/detail', $data);
        
    }

    public function create()
    {
        $data = [
            'tittle' => 'Create Data Komik'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => ' Masukan {field}  dahulu',
                    'is_unique' => '{field} sudah terdaftar'
                        ]
                    ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan data {field}'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan data {field}'
                ]
            ]
                ])){
                    return redirect()->to('/komik/create')->withInput()->with('validation',$this->validation);
                }
        // validasi gambar
        if(!$this->validate([
            'sampul' => [
                'rules' =>'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Masukan hanya gambar',
                    'mime_in' => 'Masukan hanya gambar'
                ]
            ]
        ])){
            
            return redirect()->to('/komik/create')->withInput()->with('validation',$this->validation);
        }

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        //jika gambar tidak di isi
        if($fileSampul->getError() == 4){
            $namaSampul = 'default.png';
        }else{
            //generte random name
            //ambil nama gambar
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan ke folder img
            $fileSampul->move('img',$namaSampul);
        }

        $slug = url_title($this->request->getVar('judul') ,'-',true );
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        $komik = $this->komikModel->find($id);
        //kondisi agar gambar defaul tidak terhapus
        if($komik['sampul'] != 'default.png'){
            //hapus gambar di server
            unlink('img/'. $komik['sampul']);
        }
        $this->komikModel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'tittle' => 'Ubah Data Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/edit', $data);
    }


    public function update($id)
    {
        $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
        if($komikLama['judul'] == $this->request->getVar('judul')){
            $rules_judul = 'required';
        }else{
            $rules_judul = 'required|is_unique[Komik.judul]';
        }

        if(!$this->validate([
            'judul' => [
                'rules' => $rules_judul,
                'errors' => [
                    'required' => ' Masukan {field}  dahulu',
                    'is_unique' => '{field} sudah terdaftar'
                        ]
                    ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan data {field}'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan data {field}'
                ]
            ]
                ])){
                    return redirect()->to('/komik/edit/'.$this->request->getVar('slug'))->withInput()->with('validation',$this->validation);
                }

        if(!$this->validate([
            'sampul' => [
                'rules' =>'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Masukan hanya gambar',
                    'mime_in' => 'Masukan hanya gambar'
                    ]
                ]

        ])){
            return redirect()->to('/komik/edit/'.$this->request->getVar('slug'))->withInput()->with('validation',$this->validation);
        }

        $fileSampul = $this->request->getFile('sampul');
        if($fileSampul->getError() == 4){
            $namaSampul = $this->request->getVar('sampulLama');
        }else{
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('img/', $namaSampul);

            unlink('img/' .$this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul') ,'-',true );
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/komik');
    }
}
// $komikModel = new App\Models\KomikModel();

        // cnth connect ke db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach($komik->getResultArray() as $row){
        //     d($row);
        // }
