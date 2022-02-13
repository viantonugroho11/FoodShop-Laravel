@extends('User.master')

@section('konten')
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('asset/User/assets/images/slide-01.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('asset/User/assets/images/slide-01.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('asset/User/assets/images/slide-01.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>The first and best budget All-You-Can-Eat restaurant in Sorong City with meat choices consists of Beef and Chicken. Authentic taste of Korean style barbeque with a touch of Indonesian fusion. Premium selected meat offered combined with inhouse sauces with ingredients imported directly from Korea and complete set meal from soup, rice, meat, drink to dessert, thus making us the best choice for foodies who want to enjoy Korean food experience with limited budget. Furthermore, our concept itself allows customers to have freedom to eat without having to limit oneself. What more can one ask? Great food, no portion limitation, appropriate price of only Rp. 99.000. All in all, come in hungry, leaving surely happy and full!🥩🥢</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('asset/User/assets/images/about-thumb-01.jpg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('asset/User/assets/images/about-thumb-02.jpg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('asset/User/assets/images/about-thumb-03.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{ asset('assets/images/about-video-bg.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
