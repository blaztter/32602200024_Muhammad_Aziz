<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HelloWorld extends Controller
{
    public function halodunia()
    {
        return view('hello_world');
    }
}
