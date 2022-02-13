@extends('User.master')

@section('konten')
<p>&nbsp;</p>
<br>
<div class="container mt-5">
   <div class="d-flex justify-content-center row">
       <div class="col-md-10">
           <div class="rounded">
               <div class="table-responsive table-borderless">
                   <table class="table">
                       <thead>
                           <tr>
                               <th class="text-center">#</th>
                               <th>Order #</th>
                               <th>Status</th>
                               <th>Total</th>
                               <th>Created</th>
                               <th>Detail</th>
                           </tr>
                       </thead>
                       <tbody class="table-body">
                           @php
                           $i=1;
                           @endphp
                           @foreach($riwayat as $item)
                           <tr class="cell-1">
                               <td class="text-center">{{$i++}}</td>
                               <td>{{$item->orderid}}</td>
                               <td>
                                   @if($item->status==='pending'||$item->status==='Belum Transaksi')
                                   <span class="badge badge-warning">
                                       Pending
                                    </span>
                                    @elseif($item->status==='deny'||$item->status==='expire'||$item->status==='cancel')
                                   <span class="badge badge-danger">
                                       Cancel
                                    </span>
                                    @else
                                   <span class="badge badge-success">
                                       Success
                                    </span>
                                    @endif
                                </td>
                               <td>@currency($item->total)</td>
                               <td>{{$item->created_at}}</td>
                               <td>
                                   <form role="form" action="{{ route('profil.detail') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" value="{{$item->orderid}}" hidden>
                                   <button type="submit" class="btn">Details</button>
                                   </form>
                                </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                   {!! $riwayat->links("pagination::bootstrap-4") !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
