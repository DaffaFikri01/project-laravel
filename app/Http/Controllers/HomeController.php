<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function products(Request $request)
    {
        $data = [
            'harga' => $request->harga,
            'qty' => $request->qty
        ];

        return $data;
    }

    public function profil($username)
    {
        return $username;
    }
}
