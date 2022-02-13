@extends('Admin.master')
@section('content')
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
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item"><a href="index.html">Produk</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tambah</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Tambah Produk</h4>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						<!-- <div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div> -->
					</div>
					<form role="form" action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
          @csrf 
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" type="text" placeholder="Masukkan Nama Produk">
              </div>
              @error('nama')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
						</div>
            <div class="form-group row">
				    	<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
							<div class="col-sm-12 col-md-10">
				    	  <textarea class="textarea_editor form-control border-radius-0 @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukan Deskripsi Produk"></textarea>
				      </div>
              @error('deskripsi')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
            </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stok</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" type="number" placeholder="Masukkan Stok Produk">
							</div>
              @error('stok')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" type="number" placeholder="Masukkan Harga Produk">
							</div>
              @error('harga')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
						</div>
            <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
							<div class="col-sm-12 col-md-10">
								<input name="gambar" type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                      <button type="Submit" class="btn btn-block btn-primary btn-flat">
                          <i class="fas fa-save"></i> Save
                      </button>
                  </div>
                  <div class="col-md-6">
                      <button type="Reset" class="btn btn-block btn-primary btn-flat">
                          <i class="fas fa-cancel"></i> cancel
                      </button>
                  </div>
                </div>
              </div>
            </div>
					</form>
				</div>
				<!-- Default Basic Forms End -->

			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
@endsection