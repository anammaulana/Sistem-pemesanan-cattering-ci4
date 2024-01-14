<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            // Validasi form
            $rules = [
                'username' => 'required|is_unique[user.username]',
                'password' => 'required|min_length[6]',
                'nama' => 'required',
            ];

            if ($this->validate($rules)) {
                // Data yang akan disimpan
                $userData = [
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'nama' => $this->request->getPost('nama'),
                ];

                // Simpan data ke database
                $userModel->save($userData);

                // Redirect ke halaman login atau halaman selanjutnya
                return redirect()->to(base_url('auth/login'));
            } else {
                // Jika validasi tidak berhasil, tampilkan pesan error
                return view('auth/register', ['validation' => $this->validator]);
            }
        }

        return view('auth/register');
    }

    public function login()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Cek keberadaan pengguna
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan data pengguna ke sesi
                $session = session();
                $session->set([
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                ]);

                // Redirect ke halaman dashboard atau halaman selanjutnya
                return redirect()->to(base_url('blank'));
            } else {
                // Login gagal, tampilkan pesan error
                return redirect()->to(base_url('auth/login'))->withInput()->with('error', 'Invalid username or password');
            }
        }

        return view('auth/login');
    }
    public function logout()
    {
        // Implementasi logout
        // Hapus sesi pengguna atau lakukan tindakan logout yang sesuai

        // Contoh menggunakan session untuk logout
        session()->destroy();

        return redirect()->to(base_url('auth/login')); // Redirect ke halaman login setelah logout
    }
}
