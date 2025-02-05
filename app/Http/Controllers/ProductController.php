<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index() {
        $active = 'dashboard';
        $data = Product::all();

        return view('index', compact('active', 'data'));
    }

    public function create() {
        $active = 'add-product';

        return view('create', compact('active'));
    }

    public function store(StoreProductRequest $request) {
        $validated_data = $request->validated();

        $last_product = Product::orderBy('kode_barang', 'desc')->first();

        $last_number = 0;
        if ($last_product) {
            $last_kode_barang = $last_product->kode_barang;
            $last_number = (int) substr($last_kode_barang, 4);
        }

        $new_number = $last_number + 1;
        $new_kode_barang = 'BRG-' . str_pad($new_number, 3, '0', STR_PAD_LEFT);

        $create = Product::create($validated_data + [
            'kode_barang' => $new_kode_barang
        ]);

        if ($create) {
            Alert::success('Sukses', 'Barang berhasil ditambahkan');
            return redirect()->route('products.index');
        } else {
            Alert::error('Gagal', 'Barang gagal ditambahkan');
        }

    }

    public function destroy($id) {
        $product = Product::find($id);
        $deleted = $product->delete();

        if ($deleted) {
            Alert::success('Sukses', 'Barang berhasil dihapus');
            return redirect()->route('products.index');
        } else {
            Alert::error('Gagal', 'Barang gagal dihapus');
        }
    }
}
