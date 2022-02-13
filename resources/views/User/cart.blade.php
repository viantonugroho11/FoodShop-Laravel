@extends('User.master')

@section('konten')
<p>&nbsp;</p>
<div class="px-4 px-lg-0">
   <div class="pb-5">
     <div class="container">
       <div class="row">
         <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

           <!-- Shopping cart table -->
           <div class="table-responsive">
             <table class="table">
               <thead>
                 <tr>
                   <th scope="col" class="border-0 bg-light">
                     <div class="p-2 px-3 text-uppercase">Product</div>
                   </th>
                   <th scope="col" class="border-0 bg-light">
                     <div class="py-2 text-uppercase">Price</div>
                   </th>
                   <th scope="col" class="border-0 bg-light">
                     <div class="py-2 text-uppercase">Quantity</div>
                   </th>
                   <th scope="col" class="border-0 bg-light">
                     <div class="py-2 text-uppercase">Remove</div>
                   </th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($cart as $item)
                  <tr>
                   <th scope="row" class="border-0">
                     <div class="p-2">
                       <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                       <div class="ml-3 d-inline-block align-middle">
                         <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$item->nama}}</a></h5>
                       </div>
                     </div>
                   </th>
                   <td class="border-0 align-middle"><strong>@currency($item->harga)</strong></td>
                   <td class="border-0 align-middle"><strong>{{$item->jumlah}}</strong></td>
                   <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.cartdestroy', $item->CartsId) }}" method="POST">
												@csrf
                        @method('DELETE')
                   <td class="border-0 align-middle"><button type="submit" class="btn text-dark">X</button></td>
                   </form>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
           <!-- End -->
         </div>
       </div>

       <div class="row py-5 p-4 bg-white rounded shadow-sm">
         <div class="col-lg-6">
           <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
           <div class="p-4">
             <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
             <textarea name="" cols="30" rows="2" class="form-control"></textarea>
           </div>
         </div>
         <div class="col-lg-6">
           <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
           <div class="p-4">
             <p class="font-italic mb-4">Additional costs are calculated based on values you have entered.</p>
             <ul class="list-unstyled mb-4">
               <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>@currency($cart->sum('nominal'))</strong></li>
               <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>@currency(($cart->sum('nominal'))*(5/100))</strong></li>
               <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                 <h5 class="font-weight-bold">@currency($cart->sum('nominal')+(($cart->sum('nominal'))*(5/100)))</h5>
               </li>
             </ul>
             <form role="form" action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @if ($cart->count() > 0)
              <button type="submit" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</button>
              @endif
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
