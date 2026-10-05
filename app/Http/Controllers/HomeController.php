<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Anandita wulanda ',
            'prodi' => 'ilmu komputer',
            'angkatan' => '2025'
        ];
        return view ('home', compact('data'));
    }
}
