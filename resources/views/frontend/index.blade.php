@extends('layouts.frontend.app')

@section('FrontendContent')
    
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('frontend') }}/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading">Leave the house cleaning chores to us</h2>
                    <h1 class="mb-4">Let us do the dirty work, so you don't have to.</h1>
                    <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span
                                class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
                        @guest
                        

                        @else
                            <form action="{{ route('appointment.store') }}" method="POST" class="appointment w-100">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                                        <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center">
                                        <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                            <label for="phone">Phone number</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center">
                                        <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                            <label for="name">Select Services</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="service" id="" class="form-control">
                                                        <option>Select Services</option>
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->name}}">{{ $service->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                                        <div class="form-group py-md-4 py-2 px-4 px-md-0">
                                            <label for="name">Cleaner Name</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="cleaner" id="" class="form-control">
                                                        <option>Select Cleaners</option>
                                                        @foreach ($cleaners as $clean)
                                                            <option value="{{ $clean->id }}">{{ $clean->name }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                                        <div
                                            class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                                            <input type="submit" value="Make an Appointment"
                                                class="btn btn-primary py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-items-center justify-content-center py-5 py-md-0"
                        style="background-image:url({{ asset('frontend') }}/images/about.jpg);">
                        <div class="time-open-wrap">
                            <div class="desc p-4">
                                <h2>Business Hours</h2>
                                <div class="opening-hours">
                                    <h4>Opening Days:</h4>
                                    <p class="pl-3">
                                        <span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
                                        <span><strong>Saturday :</strong> 9am to 17 pm</span>
                                    </p>
                                    <h4>Vacations:</h4>
                                    <p class="pl-3">
                                        <span>All Sunday Days</span>
                                        <span>All Official Holidays</span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc p-4 bg-secondary">
                                <h3 class="heading">For Emergency Cases</h3>
                                <span class="phone">(+01) 123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 pt-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Cleaning Company</span>
                            <h2 class="mb-4">Let's make you fresher than ever</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean. A small river named Duden flows by their place
                                and supplies it with the necessary regelialia. It is a paradisematic country, in which
                                roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class="row ftco-counter py-5" id="section-counter">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="45">0</strong>
                                </div>
                                <div class="text">
                                    <span>Years of <br>Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="2342">0</strong>
                                </div>
                                <div class="text">
                                    <span>Happy <br>Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                </div>
                                <div class="text">
                                    <span>Building <br>Cleaned</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Services</span>
                    <h2>How We Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-workplace"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Office Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-pool"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Pool Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-rug"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Carpet Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-kitchen"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Kitchen Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-garden"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Garden Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-balcony"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Window Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
                    <div class="heading-section ftco-animate text-center text-lg-left">
                        <span class="subheading">Team &amp; Staff</span>
                        <h2>Our Team</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-secondary">View All Staff</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('frontend') }}/images/staff-1.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Office Cleaner</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('frontend') }}/images/staff-2.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Office Cleaner</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{ asset('frontend') }}/images/staff-3.jpg);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Lloyd Wilson</h3>
                            <span class="position mb-2">Office Cleaner</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Happy Customer</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend') }}/images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend') }}/images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend') }}/images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend') }}/images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-right"></span></div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                            style="background-image: url({{ asset('frontend') }}/images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-1">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-12 heading-section  text-center ftco-animate">
                    <span class="subheading">Our Project</span>
                    <h2>We have done many latest cleaning project</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-1.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-1.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">House Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-2.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-2.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Window Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-3.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-3.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Pool Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-4.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-4.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Office Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-5.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-5.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Carpet Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-6.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-6.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Garden Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-7.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-7.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Carpet Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center"
                        style="background-image: url({{ asset('frontend') }}/images/work-8.jpg);">
                        <a href="{{ asset('frontend') }}/images/work-8.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Pool Cleaning</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('frontend') }}/images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                    style="background-image: url({{ asset('frontend') }}/images/person_2.jpg);"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>04 March 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('frontend') }}/images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                    style="background-image: url({{ asset('frontend') }}/images/person_3.jpg);"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>04 March 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('frontend') }}/images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 px-4">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                    style="background-image: url({{ asset('frontend') }}/images/person_1.jpg);"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>04 March 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">10 Tips to clean your window</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url('{{ asset('frontend') }}/images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Together we will explore new things</h2>
                    <a href="" class="icon-video d-flex align-items-center justify-content-center"><span
                            class="fa fa-play"></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading mb-3">Price &amp; Plans</span>
                    <h2>Choose Your Perfect Plans</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa flaticon-sprayer"></span></div>
                            <h4 class="heading-2">Starter</h4>
                            <span class="price"><sup>$</sup> <span class="number">49</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                                <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7 active">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa flaticon-vacuum-cleaner"></span></div>
                            <h4 class="heading-2">Standard</h4>
                            <span class="price"><sup>$</sup> <span class="number">79</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                                <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa flaticon-tap"></span></div>
                            <h4 class="heading-2">Premium</h4>
                            <span class="price"><sup>$</sup> <span class="number">109</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                                <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa flaticon-cleaning"></span></div>
                            <h4 class="heading-2">Platinum</h4>
                            <span class="price"><sup>$</sup> <span class="number">159</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                                <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                                <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                            </ul>

                            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection