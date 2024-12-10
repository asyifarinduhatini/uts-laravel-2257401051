<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Showlogout()
    {
        $data = [
            'name' => "Asyifa Rindu Hatini",
            'nim' => '2257401051',
            'kelas' => 'MI22B'
        ];
        return view('logout', $data);
    }
}
