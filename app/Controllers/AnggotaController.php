<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class AnggotaController extends Controller
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll(); // Ambil semua data anggota

        return view('anggota/index', $data);
    }

    public function create()
    {
        return view('anggota/create');
    }

    public function store()
    {
        $model = new AnggotaModel();
        $model->save([
            'nama'    => $this->request->getPost('nama'),
            'alamat'  => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ]);

        return redirect()->to('/anggota');
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);

        return view('anggota/edit', $data);
    }

    public function update($id)
    {
        $model = new AnggotaModel();
        $model->update($id, [
            'nama'    => $this->request->getPost('nama'),
            'alamat'  => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
        ]);

        return redirect()->to('/anggota');
    }

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);

        return redirect()->to('/anggota');
    }
}
