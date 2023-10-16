<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->select('name', 'harga')
            ->orderByDesc('id')
            ->where('status', 0)
            ->get();
        return $products;
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'harga' => $request->harga,
            'status' => $request->status
        ];

        DB::table('products')->insert($data);

        return $data;
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'harga' => $request->harga,
            'status' => $request->status
        ];

        DB::table('products')
            ->where('id', $id)
            ->update($data);

        return $data;
    }

    public function delete($id)
    {

        DB::table('products')
            ->where('id', $id)
            ->delete();

        return 'berhasil dihapus';
    }
}
