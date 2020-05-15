<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SiswaModel');
    }

    public function index()
    {
        $data['siswa'] = $this->SiswaModel->view();

        $this->load->view('index', $data); // Load view index.php
    }

    public function form()
    {
        $this->load->view('form'); // Load view form.php
    }

    public function save()
    {
        // Ambil data yang dikirim dari form
        $nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
        $nama = $_POST['nama']; // Ambil data nama dan masukkan ke variabel nama
        $telp = $_POST['telp']; // Ambil data telp dan masukkan ke variabel telp
        $alamat = $_POST['alamat']; // Ambil data alamat dan masukkan ke variabel alamat
        $data = array();

        $index = 0; // Set index array awal dengan 0
        foreach ($nis as $datanis) { // Kita buat perulangan berdasarkan nis sampai data terakhir
            array_push($data, array(
                'nis' => $datanis,
                'nama' => $nama[$index],  // Ambil dan set data nama sesuai index array dari $index
                'telp' => $telp[$index],  // Ambil dan set data telepon sesuai index array dari $index
                'alamat' => $alamat[$index],  // Ambil dan set data alamat sesuai index array dari $index
            ));

            $index++;
        }

        $sql = $this->SiswaModel->save_batch($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)

        // Cek apakah query insert nya sukses atau gagal
        if ($sql) { // Jika sukses
            echo "<script>alert('Data berhasil disimpan');window.location = '" . base_url('index.php/siswa') . "';</script>";
        } else { // Jika gagal
            echo "<script>alert('Data gagal disimpan');window.location = '" . base_url('index.php/siswa/form') . "';</script>";
        }
    }
}
