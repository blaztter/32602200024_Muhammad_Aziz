<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class pages extends BaseController
{
    public function profile()
    {
        // Implementasi Metode Profile
        return view('profile');
    }

    public function skills()
    {
        // Implementasi Metode skills
        return view('profile');
    }
}
?>