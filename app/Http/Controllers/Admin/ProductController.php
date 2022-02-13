<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('Admin.produk.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.produk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'=>'required',
            'stok'=>'required',
            'harga'=>'required',
            'gambar'  => 'required|image|mimes:png,jpg,jpeg',            
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/PhotoProduct/', $image->hashName());
        $product = Product::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'stok'     => $request->stok,
            'harga'     => $request->harga,
            'gambar'     => $image->hashname(),
        ]);
        if($product){
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk=product::findorfail($id);
        return view('admin.produk.edit',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'=>'required',
            'stok'=>'required',
            'harga'=>'required',
        ]);
        $product=Product::FindOrFail($id);
        if($request->file('gambar') == "") {
            $product->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'stok'     => $request->stok,
                'harga'     => $request->harga
            ]);
        }else{
            //hapus data foto lama
            Storage::disk('local')->delete('public/PhotoProduct/'.$product->gambar);
            //simpan kembali
            $image = $request->file('gambar');
            $image->storeAs('public/PhotoProduct/', $image->hashName());
            $program->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'stok'     => $request->stok,
                'harga'     => $request->harga,
                'gambar'     => $image->hashname(),
            ]);
        }
        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('local')->delete('public/PhotoProduct/'.$product->gambar);
        $product->delete();
        if($product){
           return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
          return redirect()->route('produk.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
