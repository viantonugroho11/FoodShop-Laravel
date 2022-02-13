<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Illuminate\Support\Facades\Hash;
use Auth;
class ProfilController extends Controller
{
    //
    public function index()
    {
        $user=User::where('id','=',Auth::User()->id)->first();
        return view('User.editprofile',compact('user'));
    }

    public function update(Request $request)
    {
        $user=User::where('id','=',Auth::User()->id)->first();
        if(!$request->old_password){
        $user->update([
            'name'     => $request->name,
            'address'     => $request->address,
            'email'     => $request->email,
            'nophone'     => $request->number
        ]);
        }
        if(Hash::Make($request->old_password)==$user->password){
           $user->update([
            'name'     => $request->name,
            'address'     => $request->address,
            'email'     => $request->email,
            'nophone'     => $request->number,
            'password'=>$request->new_password
        ]);
        }else{
            return redirect()->route('profil.index')->with(['error' => 'Password Tidak Sama!']);
        }
        if($user){
            return redirect()->route('profil.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('profil.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function cart()
    {
        $cart = Cart::where('id_user','=',Auth::User()->id)->
        leftjoin('products','products.id','carts.id_product')
        ->select('products.*','carts.jumlah','carts.id as CartsId','carts.nominal')->get();
        return view('User.cart',compact('cart'));
    }

    public function riwayat()
    {
        $riwayat=transaksi::where('id_user','=',Auth::User()->id)->latest()->paginate(10);
        return view('User.order',compact('riwayat'));
    }

    public function detail(Request $request)
    {
        $detail1=Transaksi::where('orderid','=',$request->id)->first();
        return view('user.detail',compact('detail1'));
    }

}
