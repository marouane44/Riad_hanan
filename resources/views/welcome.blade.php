@extends('layouts.master')
@section('content')

    <!-- Header  Slider style-->

    <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider">
        <!-- Wrapper for slides-->
        <div role="listbox" class="carousel-inner">
            <div style="background-image: url({{ URL::asset('https://drive.google.com/uc?export=view&id=18eVmZD4V1QM2wiyUyCXsmnNanXYCc8m9')}});backgroudn-position: center right;"
                class="item active slide-1">
                <div class="carousel-caption nhs-caption nhs-caption5">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content text-center">
                                <h2 data-animation="animated fadeInUp" class="this-title">Welcome to Our Lake Hotel</h2>
                                <p data-animation="animated fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url({{ URL::asset('https://drive.google.com/uc?export=view&id=18eVmZD4V1QM2wiyUyCXsmnNanXYCc8m9') }});backgroudn-position: center right;"
                class="item slide-2">
                <div class="carousel-caption nhs-caption nhs-caption5">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content text-center">
                                <h2 data-animation="animated fadeInUp" class="this-title">Welcome to Our Lake Hotel</h2>
                                <p data-animation="animated fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev"
            class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a
            href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i
                class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>

    <!-- Header  Slider style-->
    <div class="nasir-welcome-style row">
        <div class="container">
            <div class="row nwelcomestyle">
                <div class="col-md-6 this-images"><img src="assets/img/zz.jpg" alt=""><img src="assets/img/er.jpg" alt=""
                        class="simg"></div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6 this-texts">
                    <h2 class="this-wtitle">Welcome Are Dream </h2>
                    <h2 class="this-title">resort for your Dream Stay</h2>
                    <p>If you chose to stay with us you will enjoy modern home comforts in a traditional setting. Whether
                        you are looking for a short weekend break or a longer holiday, we offer a range of packages that
                        will cater for all. stay with us you will enjoy modern home comforts in a traditional setting.</p>
                    <p>Whether you are looking for a short weekend break or a longer holiday, we offer a range of packages
                        that will cater for all.</p>
                </div>
            </div>
            <div class="row">
                <div class="single_wel_cont home4v col-md-3 col-sm-6"><a href="#" class="wel-box">
                        <div class="icon-box"><img src="images/welcome/icon-3.png" alt=""></div>
                        <h4>Lexuary Spa</h4>
                        <div class="overlay transition3s">
                            <div class="icon_position_table">
                                <div class="icon_container border_round">
                                    <h2>Lexuary Spa</h2>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="single_wel_cont home4v col-md-3 col-sm-6"><a href="#" class="wel-box">
                        <div class="icon-box"><img src="images/welcome/icon-1.png" alt=""></div>
                        <h4>Inhouse Restaurant</h4>
                        <div class="overlay transition3s">
                            <div class="icon_position_table">
                                <div class="icon_container border_round">
                                    <h2>Inhouse Restaurant</h2>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="single_wel_cont home4v col-md-3 col-sm-6"><a href="#" class="wel-box">
                        <div class="icon-box"><img src="images/welcome/icon-2.png" alt=""></div>
                        <h4>Fitness Gym</h4>
                        <div class="overlay transition3s">
                            <div class="icon_position_table">
                                <div class="icon_container border_round">
                                    <h2>Fitness Gym</h2>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="single_wel_cont home4v col-md-3 col-sm-6"><a href="#" class="wel-box">
                        <div class="icon-box"><img src="images/welcome/icon-3.png" alt=""></div>
                        <h4>Delicious Food</h4>
                        <div class="overlay transition3s">
                            <div class="icon_position_table">
                                <div class="icon_container border_round">
                                    <h2>Delicious Food</h2>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>

    <!-- Rooms And Suits style-->
    <div class="row room-and-suits-style">
        <section class="container clearfix common-pad">
            <div class="sec-header sec-header-pad">
                <h2>Rooms And Suits</h2>
                <h3>Pick a room that best suits your taste and budget</h3>
            </div>
            <div class="room-slider">
                <div class="roomsuite-slider-two">
                    <div class="room-suite room-suite-htwo">
                        <div class="item">
                            <div class="ro-img"><img src="images/rooms/8.jpg" alt="" class="img-responsive"></div>
                            <div class="ro-txt">
                                <h2>Deluxe Room</h2>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit
                                    amet</p>
                                <div class="ro-text-two">
                                    <div class="left-p-two pull-left"><a href="single-room.html" class="res-btn">details</a>
                                    </div>
                                    <div class="right-p-two pull-right">
                                        <p>$135<span>Per Night</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-suite room-suite-htwo">
                        <div class="item">
                            <div class="ro-img"><img src="images/rooms/9.jpg" alt="" class="img-responsive"></div>
                            <div class="ro-txt">
                                <h2>Economy Room</h2>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit
                                    amet</p>
                                <div class="ro-text-two">
                                    <div class="left-p-two pull-left"><a href="single-room.html" class="res-btn">details</a>
                                    </div>
                                    <div class="right-p-two pull-right">
                                        <p>$215<span>Per Night</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-suite room-suite-htwo">
                        <div class="item">
                            <div class="ro-img"><img src="images/rooms/10.jpg" alt="" class="img-responsive"></div>
                            <div class="ro-txt">
                                <h2>Super Room</h2>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit
                                    amet</p>
                                <div class="ro-text-two">
                                    <div class="left-p-two pull-left"><a href="single-room.html" class="res-btn">details</a>
                                    </div>
                                    <div class="right-p-two pull-right">
                                        <p>$315<span>Per Night</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-suite room-suite-htwo">
                        <div class="item">
                            <div class="ro-img"><img src="images/rooms/11.jpg" alt="" class="img-responsive"></div>
                            <div class="ro-txt">
                                <h2>Family Room</h2>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit
                                    amet</p>
                                <div class="ro-text-two">
                                    <div class="left-p-two pull-left"><a href="single-room.html" class="res-btn">details</a>
                                    </div>
                                    <div class="right-p-two pull-right">
                                        <p>$199<span>Per Night</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Rooms And Suits style-->
    <!-- Offers-->
    <section class="our-offer-htwo clearfix home4offers-two">
        <div class="container clearfix common-pad">
            <div class="row">
                <div class="col-md-4 col-sm-6 offer-left">
                    <div class="offer-img-box1">
                        <div class="spa-offer">
                            <div class="img_holder"><img src="images/our-resort/1.jpg" alt="" class="img-responsive">
                                <div class="overlay">
                                    <div class="room-ad-cont">
                                        <h2>25% <span>off</span></h2>
                                        <h3>Weeken Spa Offer</h3>
                                        <p>Enjoy a luxurious SPA weekend dedicated to helping you unwind.</p><a
                                            href="booking.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 our-offer-left">
                    <div class="sec-header3">
                        <h2>Our Offers</h2>
                        <h3>Pick a room that best suits</h3>
                    </div>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipis civelit. Red quia numquam.</p>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam.</p>
                </div>
                <div class="col-md-4 col-sm-12 offer-right">
                    <div class="offer-img-box2">
                        <div class="box1">
                            <div class="img_holder"><a href="booking.html"><img src="images/our-resort/2.jpg" alt=""
                                        class="img-responsive">
                                    <div class="overlay">
                                        <div class="text1">* condition apply</div>
                                        <div class="offertext1">
                                            <p>15% <span class="off-txt">off</span><span class="winter-txt">In
                                                    Winter<br>Season</span></p>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="box2">
                            <div class="img_holder"><a href="booking.html"><img src="images/our-resort/3.jpg" alt=""
                                        class="img-responsive">
                                    <div class="overlay">
                                        <p>Honeymoon <span>Offer</span></p>
                                        <h2>25% <span>off</span></h2>
                                        <h6>* condition apply</h6>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Activities-->
    <section class="row nasir-activities2">
        <div class="container">
            <div class="sec-header sec-header-pad sec-w-header">
                <h2>Rooms And Suits</h2>
                <h3>Pick a room that best suits your taste and budget</h3>
            </div>
            <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur,
                adipis civelit. Red quia numquam. Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem
                ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam.
            </p>
        </div>
        <ul class="nav nav-justified">
            <li><img src="images/activities/7.jpg" alt="">
                <div class="this-overlay"></div>
                <div class="this-texts">
                    <h3 class="this-ftitle">Enjoyr the Cycling</h3>
                    <h3 class="this-stitle">Cycling Riding</h3>
                </div>
            </li>
            <li><img src="images/activities/8.jpg" alt="">
                <div class="this-overlay"></div>
                <div class="this-texts">
                    <h3 class="this-ftitle">Enjoyr the Tracking</h3>
                    <h3 class="this-stitle">Mountain climbing</h3>
                </div>
            </li>
            <li><img src="images/activities/9.jpg" alt="">
                <div class="this-overlay"></div>
                <div class="this-texts">
                    <h3 class="this-ftitle">Enjoyr the Sea</h3>
                    <h3 class="this-stitle">Water Skilling</h3>
                </div>
            </li>
            <li><img src="images/activities/10.jpg" alt="">
                <div class="this-overlay"></div>
                <div class="this-texts">
                    <h3 class="this-ftitle">Enjoyr the Rope Trolling</h3>
                    <h3 class="this-stitle">Mountain Trolley</h3>
                </div>
            </li>
            <li><img src="images/activities/11.jpg" alt="">
                <div class="this-overlay"></div>
                <div class="this-texts">
                    <h3 class="this-ftitle">Enjoyr the Safari</h3>
                    <h3 class="this-stitle">Forest Riding</h3>
                </div>
            </li>
        </ul>
    </section>
    <!-- Testimonials & Our Events style-->
    <div class="container clearfix common-pad">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sec-header-two">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonials-wrapper">
                    <div class="testimonial-sliders-two">
                        <div class="item">
                            <div class="test-cont">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <div class="test-bot">
                                <div class="tst-img"><img src="images/testimonials/1.png" alt="" class="img-responsive">
                                </div>
                                <div class="client_name">
                                    <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a>
                                    </h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="test-cont">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <div class="test-bot">
                                <div class="tst-img"><img src="images/testimonials/2.png" alt="" class="img-responsive">
                                </div>
                                <div class="client_name">
                                    <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a>
                                    </h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="test-cont">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <div class="test-bot">
                                <div class="tst-img"><img src="images/testimonials/3.png" alt="" class="img-responsive">
                                </div>
                                <div class="client_name">
                                    <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a>
                                    </h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="test-cont">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <div class="test-bot">
                                <div class="tst-img"><img src="images/testimonials/4.png" alt="" class="img-responsive">
                                </div>
                                <div class="client_name">
                                    <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a>
                                    </h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="test-cont">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <div class="test-bot">
                                <div class="tst-img"><img src="images/testimonials/5.png" alt="" class="img-responsive">
                                </div>
                                <div class="client_name">
                                    <h5><a href="testimonials.html">Mark John - <span>Nescom Technology- Director</span></a>
                                    </h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 event-wrapper">
                <div class="sec-header-two">
                    <h2>Our Events</h2>
                </div>
                <div class="our-event-t-wrapper">
                    <div class="media">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>25<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a Family Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>08<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a Family Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                    <div class="media media-last">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>08<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a Family Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="row nasir-contacts">
        <!-- TT-CONTACT-MAP-->
        <div id="map-canvas" data-lat="51.477254" data-lng="-0.026888" data-zoom="14"
            class="tt-contact-map nstyle map-block"></div>
        <div class="addresses-block"><a data-lat="51.477254" data-marker="images/marker.png" data-lng="-0.026888"
                data-string="1. Here is some address or email or phone or something else..."></a></div>
        <!-- Addresses-->
        <div class="nasir-contact-box">
            <div class="media">
                <div class="media-left"><i class="fa fa-map-marker media-object"></i></div>
                <div class="media-body">Lake Resort, 562, Mallin Street New Youk, NY 100 254</div>
            </div>
            <div class="media">
                <div class="media-left"><i class="fa fa-envelope-o media-object"></i></div>
                <div class="media-body"><a href="mailto:info@lakeresort.com">info@lakeresort.com</a><br><a
                        href="mailto:support@lakeresort.com">support@lakeresort.com</a></div>
            </div>
            <div class="media">
                <div class="media-left"><i class="fa fa-phone media-object"></i></div>
                <div class="media-body"><a href="callto:+18005622487">+ 1800 562 2487</a><br><a href="callto:+32155468975">+
                        3215 546 8975</a></div>
            </div>
        </div>
    </section>


@endsection
