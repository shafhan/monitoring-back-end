<?php

class Santri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar santri';
        $data['sant'] = $this->model('santri_model')->getAllSantri();
        $this->view('templates/header', $data);
        $this->view('santri/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail santri';
        $data['sant'] = $this->model('Santri_model')->getSantriById($id);
        $this->view('templates/header', $data);
        $this->view('santri/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Santri_model')->tambahDataSantri($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/santri');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Santri_model')->hapusDataSantri($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/santri');
            exit;
        }
    }

    public function getubah() 
    {
        echo json_encode($this->model('Santri_model')->getSantriById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Santri_model')->ubahDataSantri($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/santri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/santri');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar santri';
        $data['sant'] = $this->model('Santri_model')->cariDataSantri();
        $this->view('templates/header', $data);
        $this->view('santri/index', $data);
        $this->view('templates/footer');
    }
}