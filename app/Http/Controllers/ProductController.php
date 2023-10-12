<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')
        //     ->select('name', 'price', 'status')
        //     ->where('status', 0)
        //     ->get();

        $products = Product::all();

        return $products;
        // return view('index', [
        //     'products' => $products
        // ]);
    }

    public function create()
    {
        return view('form');
    }

    public function insert(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'status' => $request->status
        ];

        // DB::table('products')->insert($data);
        $product = Product::create($data);

        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'status' => $request->status
        ];

        // DB::table('products')
        //     ->where('id', $id)
        //     ->update($data);

        $product->update($data);

        return $data;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        // DB::table('products')
        //     ->where('id', $id)
        //     ->delete();

        $product->delete();

        return 'berhasil dihapus';
    }
}
