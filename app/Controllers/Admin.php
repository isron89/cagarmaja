<?php

namespace App\Controllers;

use App\Models\dataAdmin;

class Admin extends BaseController
{

    protected $dataAd;
    public function __construct()
    {
        $this->dataAd = new dataAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin',
            'cagar' => $this->dataAd->tampilData()
        ];

        return view('admin/dashboard', $data);
    }

    public function create()
    {
        //session();

        $data = [
            'title' => 'Create data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_cagar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama cagar budaya harus diisi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi cagar budaya harus diisi!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat cagar budaya harus diisi!'
                ]
            ],
            'desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Desa cagar budaya harus diisi!'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kecamatan cagar budaya harus diisi!'
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kabupaten cagar budaya harus diisi!'
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Provinsi cagar budaya harus diisi!'
                ]
            ],
            'latitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Latitude maps cagar budaya harus diisi!'
                ]
            ],
            'longitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Longitude maps cagar budaya harus diisi!'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih foto cagar budaya terlebih dahulu',
                    'max_size' => 'Ukuran foto terlalu besar',
                    'is_image' => 'Pilih foto dengan ekstensi jpg/jpeg/png',
                    'mime_in' => 'Pilih foto dengan ekstensi jpg/jpeg/png'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/create')->withInput();
        }
        //dd('berhaisl');
        $fileFoto = $this->request->getFile('foto');
        //dd($filef);
        //ganti nama
        $nama = $this->request->getVar('nama_cagar');
        $namaFile = $nama . "1.jpg";
        //move foto
        $fileFoto->move('assets/img/foto', $namaFile);
        //dd($fileFoto);

        $this->dataAd->save([
            'nama_cagar' => $this->request->getVar('nama_cagar'),
            'kode_pengelolaan' => $this->request->getVar('kode_pengelolaan'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'alamat' => $this->request->getVar('alamat'),
            'desa' => $this->request->getVar('desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude')
        ]);

        session()->setFlashdata('pesan', 'Data telah ditambahkan');

        return redirect()->to('/admin');
    }

    public function hapus($id)
    {
        $cagar = $this->dataAd->find($id);
        unlink('assets/img/foto/' . $cagar['nama_cagar'] . '1.jpg');

        $this->dataAd->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit data',
            'validation' => \Config\Services::validation(),
            'cagar' => $this->dataAd->tampilData($id)
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_cagar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama cagar budaya harus diisi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi cagar budaya harus diisi!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat cagar budaya harus diisi!'
                ]
            ],
            'desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Desa cagar budaya harus diisi!'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kecamatan cagar budaya harus diisi!'
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kabupaten cagar budaya harus diisi!'
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Provinsi cagar budaya harus diisi!'
                ]
            ],
            'latitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Latitude maps cagar budaya harus diisi!'
                ]
            ],
            'longitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Longitude maps cagar budaya harus diisi!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit/' . $this->request->getVar('id_cagar'))->withInput()->with('validation', $validation);
        }

        $cagar = $this->dataAd->find($id);
        unlink('assets/img/foto/' . $cagar['nama_cagar'] . '1.jpg');

        $fileFoto = $this->request->getFile('foto');
        //dd($filef);
        //ganti nama
        $nama = $this->request->getVar('nama_cagar');
        $namaFile = $nama . "1.jpg";
        //move foto
        $fileFoto->move('assets/img/foto', $namaFile);

        $this->dataAd->save([
            'id_cagar' => (int)$id,
            'nama_cagar' => $this->request->getVar('nama_cagar'),
            'kode_pengelolaan' => $this->request->getVar('kode_pengelolaan'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'alamat' => $this->request->getVar('alamat'),
            'desa' => $this->request->getVar('desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude')
        ]);

        session()->setFlashdata('pesan', 'Data berhasils diubah');

        return redirect()->to('/admin');
    }
}
