<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {  
    public function index() {  
        $this->load->view('layout/back');
        $this->load->view('formbiodata');
    }  

    public function tampil() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|min_length[3]', [
            'required' => 'Ga Punya Nama atau Lupa Nama Sendiri?',
            'min_length' => 'Punya Nama Pendek Amat'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|min_length[3]', [
            'required' => 'Tanya Alamat ke Ketua RT Setempat!',
            'min_length' => 'Perasaan "Jalan" Aja 5 Huruf. Alamat Kok Cuma 1 Huruf?!'
        ]);

        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|min_length[3]', [
            'required' => 'No. HP Tolong Diisi. Siapa Tau Bisa Temenin SleepCall',
            'min_length' => 'Jangan Pelit Angka Dong'
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]', [
            'required' => 'NIM Harus Diisi Wahai Mahasiswa',
            'min_length' => 'Kuliah apa Kaga?'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email', [
            'required' => 'Email Harus Diisi. Jangan Manja!',
            'min_length' => 'Email Pendek Amat',
            'valid_email' => 'Pake "@" Dong!'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Buat Manusia Yang Lahir Aja'
        ]);  

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('formbiodata');
        } else {
            // Jika validasi berhasil, tampilkan hasil
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'tgl_lahir' => $this->input->post('tgl_lahir')
            );
            $this->load->view('layout/atas');
            $this->load->view('tampilan-biodata', $data);
        }
    }
}
?>
