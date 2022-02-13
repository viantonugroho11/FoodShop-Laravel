@extends('Admin.master')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Produk</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('administrator')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Transaksi</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Transaksi</h4>
            {{-- <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary">Tambah</a> --}}
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Orderid</th>
									<th>Transaksi Id</th>
									<th>User</th>
									<th>Tipe</th>
									<th>Status</th>
									<th>Total</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                @forelse ($transaksi as $data)
								<tr>
									{{-- <td >{{$data->id}}</td> --}}
									<td class="table-plus">{{$data->orderid}}</td>
									<td>{{$data->transaksiid}}</td>
									<td>{{$data->UsrNama}}</td>
									<td>{{$data->tipe}}</td>
									<td>{{$data->status}}</td>
									<td>{{$data->total}}</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{route('transaksi.show',$data->orderid)}}"><i class="dw dw-eye"></i> View</a>
											</div>
										</div>
									</td>
								</tr>
                @empty
                    
                @endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
@endsection
@section('jscode')
    	<script src="{{ asset('asset/Admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('asset/Admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('asset/Admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('asset/Admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	
  <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{ asset('vendors/scripts/datatable-setting.js')}}"></script>
@endsection