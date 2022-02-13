@extends('User.master')

@section('konten')
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <center>
                <div class="col-lg-6">
                <div class="contact-form">
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Sign Up</h4>
                            <p>Please fill in this form to create an account!</p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" value="{{ old('nama') }}" placeholder="Name" required="">
                          </fieldset>
                          @error('alamat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="number" type="text" id="phone" class="form-control @error('nomer') is-invalid @enderror" value="{{ old('nomer') }}" placeholder="Phone Number" required="">
                            @error('nomer')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                          </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="name" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="">
                              @error('email')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>
                              <input name="password" type="password" id="name" placeholder="Password" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>
                              <input name="password_confirmation" type="password" id="name" placeholder="Confirm Password" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="address" rows="6" id="message" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Address" required=""></textarea>
                          </fieldset>
                          @error('alamat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Register</button>
                          </fieldset>
                        </div>
                        <div class="container signin">
                            <p>Already have an account? <a href="{{route('login')}}">Login Here</a>.</p>
                        </div>
                      </div>
                    </form>
                </div>
                </div>
            </center>
        </div>
    </div>
</section>

@endsection
