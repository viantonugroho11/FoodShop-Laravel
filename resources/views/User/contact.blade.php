@extends('User.master')

@section('konten')
<section class="section" id="reservation">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>Contact Us</h6>
                      <h2>Here Where You Can Dine In to Our Restaurant!</h2>
                  </div>
                  <p>Monday to Saturday: 3:00 – 10:30 PM <br>Sunday: 12:00 – 10:30 PM</p>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="phone">
                              <i class="fa fa-phone"></i>
                              <h4>Phone Numbers</h4>
                              <span><a href="#">0812-1288-8885</a><br></span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="message">
                              <i class="fa fa-envelope"></i>
                              <h4>Address</h4>
                              <span>
                                  <a href="#">Jalan Sam Ratulangi Ruko Alfa Mega No.2B</a>
                                  <br><a href="#">Kampung Baru</a>
                                  <br><a href="#">Kecamatan Sorong</a>
                                  <br><a href="#">Kota Sorong</a>
                                  <br><a href="#">Papua Barat 98411</a>
                                  <br><a href="#">Indonesia</a>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="contact-form">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                          <h4>LOCATION</h4>
                      </div>
                      <div class="col-lg-12 left-text-content">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.712590043873!2d131.25528188420188!3d-0.8719631869853165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62f61b03c2c8bda6!2sManse%20Korean%20Grill%20Sorong%2C%20Papua%20Barat!5e0!3m2!1sen!2sid!4v1621657553164!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
