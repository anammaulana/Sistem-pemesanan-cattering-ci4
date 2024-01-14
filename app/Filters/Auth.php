<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // // Implementasi logika otentikasi di sini
        // // Misalnya, cek apakah user telah login
        // $isLoggedIn = // Lakukan pengecekan login (gunakan session atau cara otentikasi lainnya)

        // if (!$isLoggedIn) {
        //     return redirect()->to(base_url('auth/login')); // Redirect ke halaman login jika tidak login
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu implementasi di sini untuk kasus sederhana
    }
}
