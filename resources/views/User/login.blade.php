@extends('User.master')

@section('konten')
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <center>
                <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Login</h4>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>
                              <input name="name" type="password" id="name" placeholder="Password" required="">
                            </fieldset>
                        </div>
                        <div class="container forgot">
                            <p><a href="#">Forgot Password?</a></p>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Login</button>
                          </fieldset>
                        </div>
                        <div class="container signup">
                            <p>Don't have an account? <a href="#">Sign Up Now</a>.</p>
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
