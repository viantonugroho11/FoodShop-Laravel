@extends('Admin.master')

@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('administrator')}}">Home</a></li>
									<li class="breadcrumb-item"><a href="{{route('transaksi.index')}}">Transaksi</a></li>
									<li class="breadcrumb-item active" aria-current="page">{{$transaksi->orderid}}</li>
								</ol>
							</nav>
						</div>
						{{-- <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Client Name</h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600">{{$transaksi->created_at}}</strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600">{{$transaksi->orderid}}</strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">{{$transaksi->UsrNama}}</strong></p>
									<p class="font-14 mb-5">{{$transaksi->UsrAddress}}</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Product</div>
								<div class="invoice-rate">Price</div>
								<div class="invoice-hours">Quantity</div>
								<div class="invoice-subtotal">Total</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									@foreach ($transaksi->getTransaksiDetail as $item)		
									<li class="clearfix">
										<div class="invoice-sub">
											@foreach($item->getproduct as $data)
                       {{$data->nama}}
                      @endforeach
										</div>
										<div class="invoice-rate">
											@foreach($item->getproduct as $data)
                       @currency($data->harga)
                      @endforeach</div>
										<div class="invoice-hours">{{$item->jumlah_qty}}</div>
										<div class="invoice-subtotal"><span class="weight-600">@currency($item->total_harga)</span></div>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Type Payment</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Type: <strong class="weight-600">{{$transaksi->tipe}}</strong></p>
												<p class="font-14 mb-5">Status: <strong class="weight-600">{{$transaksi->status}}</strong></p>
											</div>
											<div class="invoice-rate font-20 weight-600">{{$transaksi->updated_at}}</div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">@currency($transaksi->total)</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
@endsection