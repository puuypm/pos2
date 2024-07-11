<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::with('category')->get();
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('barang.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all());
        Alert::success('Success', 'Data Added Successfully');
        return redirect()->to('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Barang::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('barang.edit', compact('edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Barang::where('id', $id)->update([
            'nama_barang' => $request->nama_barang,
            'id_category' => $request->id_category,
            'satuan' => $request->satuan,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ]);
        toast('Data has been successfully updated', 'success');
        return redirect()->to('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('id', $id)->delete();
        // Alert::success('Success', 'Data Deleted Successfully');
        toast('Data Deleted Successfully','success');
        return redirect()->to('barang');
    }
}
