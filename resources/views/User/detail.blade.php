@extends('User.master')

@section('konten')
<p>&nbsp;</p>
<div class="container rounded bg-white mt-5 mb-5"><br><br>
    <div class="container">
        <div class="row-2">
            <ul>
             <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
                <div class="text-uppercase">
                    <p>&nbsp;<h4>Order detail</h4>&nbsp;</p>
                </div>
                <div class="h4">&nbsp; {{$detail1->created_at}}</div>
                <div class="pt-1">
                    <p>Order {{$detail1->orderid}} <b class="text-dark">is currently {{$detail1->status}}</b></p>
                </div>
                <div class="btn close text-white"> &times; </div>
            </div>
            </ul>
        </div>
    </div>
    <div class="wrapper bg-white">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col-4">products</th>
                    <th scope="col-4" class="text-center">quantity</th>
                    <th scope="col-4" class="text-right">total price</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($detail1->getTransaksiDetail as $item)
               <tr>
                   <th scope="row">
                       @foreach($item->getproduct as $data)
                       {{$data->nama}}
                       @endforeach
                    </th>
                   <td class="text-center">{{$item->jumlah_qty}}</td>
                   <td class="text-right">@currency($item->total_harga)</td>
               </tr>
               @endforeach
            </tbody>
        </table>
    </div>
    <div class="pt-2 border-bottom mb-3"></div>
    <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
        <div class="text-muted"><b>Today's Total</b></div>
        <div class="ml-auto h5"><b>@currency($detail1->total)</b></div>
    </div>
    <div class="d-flex justify-content-start align-items-center pl-3">
        <div class="text-muted">Payment Method</div>
        <div class="ml-auto"> {{$detail1->tipe}} </div>
    </div>
    </div>
</div>
@endsection
