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
            'lower_price' => $request->lower_price,
            'upper_price' => $request->upper_price,
            'sort' => $request->sort
        ];

        return $data;
    }

    public function profile($username)
    {
        return $username;
    }
}
