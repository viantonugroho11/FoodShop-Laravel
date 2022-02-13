@extends('User.master')

@section('konten')
<div class="container rounded bg-white mt-5 mb-5">
    <form role="form" action="{{ route('profil.update',$user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- @method('put') --}}
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{ old('nama',$user->name) }}">
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    &nbsp;
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Phone Number</label>
                        <input type="text" name="number" class="form-control @error('nomer') is-invalid @enderror" placeholder="" value="{{ old('nomer',$user->nophone) }}">
                        @error('nomer')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        <label class="labels">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{ old('email',$user->email) }}">
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    &nbsp;
                    <div class="col-lg-12">
                        <label class="labels">Address</label>
                          <textarea style="height:150px;" name="address" id="message" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">{{$user->address}}</textarea>
                          @error('alamat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                    </div>
                </div>
                {{-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button> --}}
                {{-- </div> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Change Password</h4>
                </div>
                <div class="col-md-12">
                    <label class="labels">Current Password</label>
                    <input name="old_password" type="password" class="form-control" placeholder="" value="">
                </div>
                <br>
                <div class="col-md-12">
                    <label class="labels">New Password</label>
                    <input name="new_password" type="password" class="form-control" placeholder="" value="">
                </div>
                &nbsp;
                <div class="col-md-12">
                    <label class="labels">Confirm New Password</label>
                    <input name="confirm_password" type="password" class="form-control" placeholder="" value="">
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Save Profil</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
