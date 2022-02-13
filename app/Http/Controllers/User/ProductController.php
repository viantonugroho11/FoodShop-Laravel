<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::all();
        $newproduct=Product::latest()->get();
        return view('User.menu',compact(['product','newproduct']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart=cart::where('id_product','=',$request->id)->where('id_user','=',Auth::user()->id)
        ->first();
        if(!$cart){
        
        $cart = Cart::create([
            'id_product'     => $request->id,
            'id_user'     => Auth::user()->id,
            'jumlah'     => '1',
            'nominal'=>$request->harga,
        ]);    
        }else{
            $jumlah=$cart->jumlah;
        $nominal=$cart->nominal;
            $cart->update([
                'jumlah'=>$jumlah+1,
                'nominal'=>$nominal+$request->harga,
            ]);
        }
        if($cart){
            return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('product.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        if($cart){
            return redirect()->route('product.cart')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('product.cart')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
