@extends('layouts.front')
@section('main')
<!-- Home Page -->
        <div class="bg-ash">
            <!-- Hero Section Start -->
            <div class="hero-area style-one position-relative">
                <div class="hero-slider-one swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-slide-item position-relative overflow-hidden">
                                <div class="hero-bg bg-f bg-1"></div>
                                <div class="container style-one">
                                    <div class="row">
                                        <div class="col-xxl-8 col-xl-10 pe-xxl-4">
                                            <div class="hero-content">
                                                <h6 class="section-subtitle style-two fw-medium font-primary d-inline-block text_primary position-relative mb-12" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">COMMIT TO BE FIT</h6>
                                                <h1 class="fw-black title-anim text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Caring Today For A Healthier Tomorrow And Forever</h1>
                                                <p class="fs-xxl-20 text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="450">We provide comprehensive healthcare services with a personal touch ensuring you receive</p>
                                                <div class="search-directory-wrap style-one" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="550">
                                                    <ul class="nav nav-tabs search-directory-tablist bg-white" role="tablist">
                                                        <li class="nav-item">
                                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Hospitals</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Doctors</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane fade show active transition" id="tab_1" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Hospital</option>
                                                                        <option value="1">Public Hospital</option>
                                                                        <option value="2">Private Hospital</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg')}}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade transition" id="tab_2" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Doctors</option>
                                                                        <option value="1">Cardiology</option>
                                                                        <option value="2">Oncology</option>
                                                                        <option value="3">Neurology</option>
                                                                        <option value="4">Dentristy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg')}}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-slide-item position-relative">
                                <div class="hero-bg bg-f bg-2"></div>
                                <div class="container style-one">
                                    <div class="row">
                                        <div class="col-xxl-8 col-xl-10 pe-xxl-4">
                                            <div class="hero-content">
                                                <h6 class="section-subtitle style-two fw-medium font-primary d-inline-block text_primary position-relative mb-12" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">COMMIT TO BE FIT</h6>
                                                <h1 class="fw-black title-anim text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">We Follow A Holistic Approach For Health Care</h1>
                                                <p class="fs-xxl-20 text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="450">We provide comprehensive healthcare services with a personal touch ensuring you receive</p>
                                                <div class="search-directory-wrap style-one" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="550">
                                                    <ul class="nav nav-tabs search-directory-tablist bg-white" role="tablist">
                                                        <li class="nav-item">
                                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">Hospitals</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_4" type="button" role="tab">Doctors</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane fade show active transition" id="tab_3" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Hospital</option>
                                                                        <option value="1">Public Hospital</option>
                                                                        <option value="2">Private Hospital</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg')}}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade transition" id="tab_4" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg')}}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Doctors</option>
                                                                        <option value="1">Cardiology</option>
                                                                        <option value="2">Oncology</option>
                                                                        <option value="3">Neurology</option>
                                                                        <option value="4">Dentristy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg')}}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg')}}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-slide-item position-relative">
                                <div class="hero-bg bg-f bg-3"></div>
                                <div class="container style-one">
                                    <div class="row">
                                        <div class="col-xxl-8 col-xl-10 pe-xxl-4">
                                            <div class="hero-content">
                                                <h6 class="section-subtitle style-two fw-medium font-primary d-inline-block text_primary position-relative mb-12" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">COMMIT TO BE FIT</h6>
                                                <h1 class="fw-black title-anim text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">We Are Providing Best Health Care Solution</h1>
                                                <p class="fs-xxl-20 text-title" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="450">We provide comprehensive healthcare services with a personal touch ensuring you receive</p>
                                                <div class="search-directory-wrap style-one" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="550">
                                                    <ul class="nav nav-tabs search-directory-tablist bg-white" role="tablist">
                                                        <li class="nav-item">
                                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_5" type="button" role="tab">Hospitals</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_6" type="button" role="tab">Doctors</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane fade show active transition" id="tab_5" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Hospital</option>
                                                                        <option value="1">Public Hospital</option>
                                                                        <option value="2">Private Hospital</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg') }}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg') }}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade transition" id="tab_6" role="tabpanel">
                                                            <form action="#" class="search-directory-form form-wrapper d-flex flex-wrap align-items-start">
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/map.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Location</option>
                                                                        <option value="1">New York</option>
                                                                        <option value="2">Florida</option>
                                                                        <option value="3">Dallas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/hospital.svg') }}" alt="Icon">
                                                                    <select class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Doctors</option>
                                                                        <option value="1">Cardiology</option>
                                                                        <option value="2">Oncology</option>
                                                                        <option value="3">Neurology</option>
                                                                        <option value="4">Dentristy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/distance.svg') }}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Distance</option>
                                                                        <option value="1">5 Km</option>
                                                                        <option value="2">10 Km</option>
                                                                        <option value="3">15 Km</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group position-relative">
                                                                    <img src="{{ asset('front/img/icons/currency.svg') }}" alt="Icon">
                                                                    <select  class="w-100 ht-56 round-10 bg-ash text-para border-0">
                                                                        <option value="0">Max Fees</option>
                                                                        <option value="1">$100 - $1000</option>
                                                                        <option value="1">$200 - $2000</option>
                                                                        <option value="1">$300 - $3000</option>
                                                                    </select>
                                                                </div>
                                                                <button class="tb-btn style-one font-secondary fw-bold position-relative text-white border-0 z-1 round-10 transition">
                                                                    Search<img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" >
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-btn style-two">
                        <button class="prev-btn hero-prev d-flex flex-column align-items-center justify-content-center border-0 transition"><i class="ri-arrow-left-s-line"></i></button>
                        <button class="next-btn hero-next d-flex flex-column align-items-center justify-content-center border-0 transition"><i class="ri-arrow-right-s-line"></i></button>
                    </div>
                </div>
            </div>
            <!-- Hero Section End -->

            <!-- Category Section Start -->
            <div class="container-fluid px-xxl-4">
                <div class="row justify-content-center gx-xxl-18">
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-yellow text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-stethoscope"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">Primary Care</a></h3>
                            <span class="text-title">24 Listings</span>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-flower text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-cardiogram"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">Cardiology</a></h3>
                            <span class="text-title">10 Listing</span>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-melanine text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-urology"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">MRI Resonance</a></h3>
                            <span class="text-title">35 Listings</span>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-chard text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-syringe"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">Blood Test</a></h3>
                            <span class="text-title">62 Listings</span>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-jordyBlue text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-microscope"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">Laboratory</a></h3>
                            <span class="text-title">76 Listings</span>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="category-card style-one bg-mauve text-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="700">
                            <div class="cat-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg-white mx-auto">
                                <i class="flaticon-wheelchair"></i>
                            </div>
                            <h3 class="fs-22 fw-extrabold"><a href="hospitals-list.html" class="text-title link-hover-title">Posologist</a></h3>
                            <span class="text-title">24 Listings</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category Section End -->
        </div>
       
        <!-- Featured Hospital Section Start -->
        <div class="container style-one ptb-120">
            <div class="row align-items-center mb-25">
                <div class="col-md-8 mb-sm-10">
                    <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">HOSPITAL BRANCH</h6>
                    <h2 class="section-title fw-black text-title mb-15 me-xxl-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Hinton Featured Hospitals</h2>
                </div>
                <div class="col-md-4">
                    <div class="slider-btn style-one d-flex flex-wrap align-items-center justify-content-md-end" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="380">
                        <button class="prev-btn hospital-prev border-0 me-2 d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-left-s-line"></i></button>
                        <button class="next-btn hospital-next border-0 ms-2 d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-right-s-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="hospital-slider-one swiper" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hospital-card style-one round-20 mb-30 transition" >
                            <div class="hospital-img position-relative round-10">
                                <img src="{{ asset('front/img/hospitals/hospital-4.jpg') }}" alt="Doctor" class="round-10">
                                <div class="share-action d-flex flex-wrap position-absolute">
                                    <div class="share-btn position-relative">
                                        <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                        <ul class="social-profile list-unstyled mb-0 transition">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        </ul>
                                    </div>
                                    <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                                </div>
                            </div>
                            <div class="hospital-info">
                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-23">
                                    <a href="doctors-list.html" class="hospital-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Hospital</a>
                                    <div class="ratings d-flex align-items-center">
                                        <ul class="rating list-unstyled mb-0">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <span class="ms-2">5k+ Rating</span>
                                    </div>
                                </div>
                                <h3 class="fs-24 fw-extrabold mb-18"><a href="hospital-details.html" class="text-title hover-text-primary link-hover-primary transition">Derma Care Dermatology Clinic</a></h3>
                                <p class="hospital-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">830 Erlang Lake Kenn North Dakota</p>
                                <div class="hospital-action-btn position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <a href="appointment-booking.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                        <span>Book Today
                                            <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                        </span>
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                    </a>
                                    <span class="position-relative booking-link fs-xx-14 text-para"><img src="{{ asset('front/img/icons/stethoscope.svg') }}" alt="Icon" class="position-absolute start-0">60 Doctors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hospital-card style-one round-20 mb-30 transition">
                            <div class="hospital-img position-relative round-10">
                                <img src="{{ asset('front/img/hospitals/hospital-5.jpg') }}" alt="Doctor" class="round-10">
                                <div class="share-action d-flex flex-wrap position-absolute">
                                    <div class="share-btn position-relative">
                                        <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                        <ul class="social-profile list-unstyled mb-0 transition">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        </ul>
                                    </div>
                                    <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                                </div>
                            </div>
                            <div class="hospital-info">
                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-23">
                                    <a href="doctors-list.html" class="hospital-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Hospital</a>
                                    <div class="ratings d-flex align-items-center">
                                        <ul class="rating list-unstyled mb-0">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <span class="ms-2">2k+ Rating</span>
                                    </div>
                                </div>
                                <h3 class="fs-24 fw-extrabold mb-18"><a href="hospital-details.html" class="text-title hover-text-primary link-hover-primary transition">Genome Wise Medical Center</a></h3>
                                <p class="hospital-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">123 St Maris Street, Kentacy, USA</p>
                                <div class="hospital-action-btn position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <a href="appointment-booking.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                        <span>Book Today
                                            <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                        </span>
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                    </a>
                                    <span class="position-relative booking-link fs-xx-14 text-para"><img src="{{ asset('front/img/icons/stethoscope.svg') }}" alt="Icon" class="position-absolute start-0">40 Doctors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hospital-card style-one round-20 mb-30 transition">
                            <div class="hospital-img position-relative round-10">
                                <img src="{{ asset('front/img/hospitals/hospital-6.jpg') }}" alt="Doctor" class="round-10">
                                <div class="share-action d-flex flex-wrap position-absolute">
                                    <div class="share-btn position-relative">
                                        <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                        <ul class="social-profile list-unstyled mb-0 transition">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        </ul>
                                    </div>
                                    <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                                </div>
                            </div>
                            <div class="hospital-info">
                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-23">
                                    <a href="doctors-list.html" class="hospital-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Hospital</a>
                                    <div class="ratings d-flex align-items-center">
                                        <ul class="rating list-unstyled mb-0">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <span class="ms-2">4k+ Rating</span>
                                    </div>
                                </div>
                                <h3 class="fs-24 fw-extrabold mb-18"><a href="hospital-details.html" class="text-title hover-text-primary link-hover-primary transition">Nanotexh Health Care Solutions</a></h3>
                                <p class="hospital-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">234 St Street, Carolina, UK</p>
                                <div class="hospital-action-btn position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <a href="appointment-booking.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                        <span>Book Today
                                            <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                        </span>
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                    </a>
                                    <span class="position-relative booking-link fs-xx-14 text-para"><img src="{{ asset('front/img/icons/stethoscope.svg') }}" alt="Icon" class="position-absolute start-0">35 Doctors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hospital-card style-one round-20 mb-30 transition">
                            <div class="hospital-img position-relative round-10">
                                <img src="{{ asset('front/img/hospitals/hospital-7.jpg') }}" alt="Doctor" class="round-10">
                                <div class="share-action d-flex flex-wrap position-absolute">
                                    <div class="share-btn position-relative">
                                        <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                        <ul class="social-profile list-unstyled mb-0 transition">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        </ul>
                                    </div>
                                    <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                                </div>
                            </div>
                            <div class="hospital-info">
                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-23">
                                    <a href="doctors-list.html" class="hospital-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Hospital</a>
                                    <div class="ratings d-flex align-items-center">
                                        <ul class="rating list-unstyled mb-0">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <span class="ms-2">5k+ Rating</span>
                                    </div>
                                </div>
                                <h3 class="fs-24 fw-extrabold mb-18"><a href="hospital-details.html" class="text-title hover-text-primary link-hover-primary transition">Premier Health Center</a></h3>
                                <p class="hospital-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">120 Lake Kenn, North Dakota, UK</p>
                                <div class="hospital-action-btn position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <a href="appointment-booking.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                        <span>Book Today
                                            <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                        </span>
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                    </a>
                                    <span class="position-relative booking-link fs-xx-14 text-para"><img src="{{ asset('front/img/icons/stethoscope.svg') }}" alt="Icon" class="position-absolute start-0">60 Doctors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Hospital Section End -->

        <!-- Directory Section Start -->
        <div class="container style-one pb-90">
            <div class="row">
                <div class="col-xl-6">
                    <div class="directory-card style-one bg-morning d-flex flex-wrap align-items-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                        <div class="directory-img position-relative img-hover overflow-hidden round-15">
                            <img src="{{ asset('front/img/directory/directory-1.jpg') }}" alt="Image" class="round-15 transition">
                        </div>
                        <div class="directory-info">
                            <h2 class="fw-bold">100+</h2>
                            <h3 class="fs-24 fw-extrabold"><a href="hospital-reviews-location-with-map.html" class="text-title link-hover-primary hover-text-primary">Hospital Across the United States</a></h3>
                            <p class="text-title">Our medical center is dedicated to providing with a commitment to excellence we offer a broad from preventive care and routine checkups</p>
                            <a href="hospital-reviews-location-with-map.html" class="font-secondary text-title link-hover-title fw-semibold">View All Location <img src="{{ asset('front/img/icons/right-arrow-black.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="directory-card style-one bg-berylGreen d-flex flex-wrap align-items-center round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="350">
                        <div class="directory-img position-relative img-hover overflow-hidden round-15">
                            <img src="{{ asset('front/img/directory/directory-2.jpg') }}" alt="Image" class="round-15 transition">
                        </div>
                        <div class="directory-info">
                            <h2 class="fw-bold">389+</h2>
                            <h3 class="fs-24 fw-extrabold"><a href="doctor-reviews-location-with-map.html" class="text-title link-hover-primary hover-text-primary">Qualified Doctors and Nurses</a></h3>
                            <p class="text-title">Our medical center is dedicated to providing with a commitment to excellence we offer a broad from preventive care and routine checkups</p>
                            <a href="doctor-reviews-location-with-map.html" class="font-secondary text-title link-hover-title fw-semibold">View All The Doctors <img src="{{ asset('front/img/icons/right-arrow-black.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Directory Section End -->

        <!-- About Us Section Start -->
        <div class="about-area style-one pb-120">
            <div class="container style-one">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-xxl-2">
                        <div class="about-img-wrap d-flex flex-wrap position-relative justify-content-between mb-md-30">
                            <div class="about-img" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                                <img src="{{ asset('front/img/about/about-img-1.jpg') }}" alt="About Us">
                            </div>
                            <div class="about-img" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                                <img src="{{ asset('front/img/about/about-img-2.jpg') }}" alt="About Us">
                            </div>
                            <div class="book-doctor text-center bg-white round-10 position-absolute" data-aos="fade-in" data-aos-duration="1100" data-aos-delay="300">
                                <div class="doctor-img mx-auto round-12">
                                    <img src="{{ asset('front/img/about/doctor.jpg') }}" alt="Doctor" class="round-12">
                                </div>
                                <h3 class="fs-22 fw-semibold"><a href="doctor-details.html" class="text-title hover-text-primary">Dr. Willis Tatum</a></h3>
                                <span class="d-block">Surgeon</span>
                                <a class="tb-btn style-one font-secondary fw-semibold d-inline-block border-0 text-white round-10 transition" href="appointment-booking.html">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-xxl-5">
                        <div class="about-content ps-xxl-5">
                            <h6 class="section-subtitle fw-semibold font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">ABOUT HINTON</h6>
                            <h2 class="section-title fw-black text-title me-xxl-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">A Comprehensive Directory For Your Health Care</h2>
                            <p class="mb-38" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">With a focus on compassionate and personalized treatment we strive to create welcoming environment where patients feel valued respected and well informed about their health</p>
                            <div class="counter-card-wrap d-flex flex-wrap justify-content-md-between justify-content-center bg-ash round-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500">
                                <div class="counter-card position-relative">
                                    <h4 class="text-title fw-black"><span class="counter fw-black">80</span>+</h4>
                                    <p class="fs-xxl-18 mb-0">Total Countries</p>
                                </div>
                                <div class="counter-card position-relative">
                                    <h4 class="text-title fw-black"><span class="counter fw-black">527</span>+</h4>
                                    <p class="fs-xxl-18 mb-0">Total Experts</p>
                                </div>
                                <div class="counter-card position-relative">
                                    <h4 class="text-title fw-black"><span class="counter fw-black">310</span>+</h4>
                                    <p class="fs-xxl-18 mb-0">Total Awards</p>
                                </div>
                            </div>
                            <ul class="feature-list d-flex flex-wrap align-items-center justify-content-between list-unstyled" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                                <li class="position-relative font-secondary fs-18 fw-semibold text-title"><img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon"> Enjoy Many Discounts In Fees</li>
                                <li class="position-relative font-secondary fs-18 fw-semibold text-title"><img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon"> Growing Listings Of Clinics</li>
                            </ul>
                            <div class="btn-wrap d-flex flex-wrap align-items-center" data-aos="fade-in" data-aos-duration="1100" data-aos-delay="700">
                                <a href="about.html" class="btn style-one font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>View More About Us
                                        <img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                                <a href="contact.html" class="font-secondary fw-semibold text-title link-hover-title pb-1 ms-lg-30 ms-sm-3">Contact Us Now<img src="{{ asset('front/img/icons/right-arrow-2.svg') }}" alt="Icon" class="position-relative ms-2 top-n1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Section End -->

        <!-- Location Section Start -->
        <div class="bg-ash pt-120 pb-90">
            <div class="container style-one">
                <div class="row align-items-center mb-25">
                    <div class="col-md-8 mb-sm-10">
                        <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">POPULAR LOCATION</h6>
                        <h2 class="section-title fw-black text-title mb-15 me-xxl-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Best Rated Location</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="slider-btn style-one d-flex flex-wrap align-items-center justify-content-md-end">
                            <button class="prev-btn location-prev border-0 me-2 d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-left-s-line"></i></button>
                            <button class="next-btn location-next border-0 ms-2 d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-right-s-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid style-one">
                <div class="row">
                    <div class="col-12 pe-lg-0" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                        <div class="location-slider-one swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="location-card style-one position-relative round-20 mb-30 transition">
                                        <img src="{{ asset('front/img/location/location-1.jpg') }}" alt="Location" class="round-20">
                                        <div class="wishlist-counter bg-white d-inline-block text-title position-absolute"><i class="ri-heart-3-line"></i><span>689</span></div>
                                        <div class="location-info bg-white round-10 position-absolute">
                                            <h3 class="fs-24 fw-extrabold"><a href="hospital-details.html" class="text-title link-hover-primary hover-text-primary">Hinton Diagnostic Center</a></h3>
                                            <p class="position-relative mb-0"><img src="{{ asset('front/img/icons/pin-blue.svg') }}" alt="Icon">124 St Maris,Toronto, Canada</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="location-card style-one position-relative round-20 mb-30 transition">
                                        <img src="{{ asset('front/img/location/location-2.jpg') }}" alt="Location" class="round-20">
                                        <div class="wishlist-counter bg-white d-inline-block text-title position-absolute"><i class="ri-heart-3-line"></i><span>205</span></div>
                                        <div class="location-info bg-white round-10 position-absolute">
                                            <h3 class="fs-24 fw-extrabold"><a href="hospital-details.html" class="text-title link-hover-primary hover-text-primary">Hinton Dental Center</a></h3>
                                            <p class="position-relative mb-0"><img src="{{ asset('front/img/icons/pin-blue.svg') }}" alt="Icon">454 Nort Avenue, Texas, USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="location-card style-one position-relative round-20 mb-30 transition">
                                        <img src="{{ asset('front/img/location/location-3.jpg') }}" alt="Location" class="round-20">
                                        <div class="wishlist-counter bg-white d-inline-block text-title position-absolute"><i class="ri-heart-3-line"></i><span>496</span></div>
                                        <div class="location-info bg-white round-10 position-absolute">
                                            <h3 class="fs-24 fw-extrabold"><a href="hospital-details.html" class="text-title link-hover-primary hover-text-primary">Hinton Community Hospital</a></h3>
                                            <p class="position-relative mb-0"><img src="{{ asset('front/img/icons/pin-blue.svg') }}" alt="Icon">54 South Decota, Casal, USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="location-card style-one position-relative round-20 mb-30 transition">
                                        <img src="{{ asset('front/img/location/location-4.jpg') }}" alt="Location" class="round-20">
                                        <div class="wishlist-counter bg-white d-inline-block text-title position-absolute"><i class="ri-heart-3-line"></i><span>236</span></div>
                                        <div class="location-info bg-white round-10 position-absolute">
                                            <h3 class="fs-24 fw-extrabold"><a href="hospital-details.html" class="text-title link-hover-primary hover-text-primary">Hinton Diagnostic Center</a></h3>
                                            <p class="position-relative mb-0"><img src="{{ asset('front/img/icons/pin-blue.svg') }}" alt="Icon">32 Sie Nasol, Georjia, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location Section End -->

        <!-- Why Choose Us Section Start -->
        <div class="wh-area style-one ptb-120">
            <div class="container style-one">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="wh-content mb-lg-30">
                            <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">WHY CHOOSE HINTON</h6>
                            <h2 class="section-title title-anim fw-black text-title mb-15 me-xxl-5" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Professional Medical Network With Large Directory Listings</h2>
                            <p class="fs-xx-14 mb-28" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">With a focus on compassionate and personalized treatment we strive to create a welcoming environment where patients feel valued respected and well informed about their health</p>
                            <div class="feature-item-wrap me-xxl-5">
                                <div class="feature-item d-flex flex-wrap" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500">
                                    <span class="feature-icon position-relative">
                                        <img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon">
                                    </span>
                                    <div class="feature-info">
                                        <h3 class="fs-24 fw-extrabold text-title mb-10">Quality Control System</h3>
                                        <p class="mb-0">Our doctors are constantly improving their skills by participating in international medical conferences and quality improvement courses</p>
                                    </div>
                                </div>
                                <div class="feature-item d-flex flex-wrap" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="600">
                                    <span class="feature-icon position-relative">
                                        <img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon">
                                    </span>
                                    <div class="feature-info">
                                        <h3 class="fs-24 fw-extrabold text-title">Highly Professional Staff</h3>
                                        <p class="mb-0">Our doctors are constantly improving their skills by participating in international medical conferences and quality improvement courses</p>
                                    </div>
                                </div>
                                <div class="feature-item d-flex flex-wrap" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="700">
                                    <span class="feature-icon position-relative">
                                        <img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon">
                                    </span>
                                    <div class="feature-info">
                                        <h3 class="fs-24 fw-extrabold text-title">Medical And Surgical Services</h3>
                                        <p class="mb-0">Our doctors are constantly improving their skills by participating in international medical conferences and quality improvement courses</p>
                                    </div>
                                </div>
                                <div class="feature-item d-flex flex-wrap" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="800">
                                    <span class="feature-icon position-relative">
                                        <img src="{{ asset('front/img/icons/check.svg') }}" alt="Icon">
                                    </span>
                                    <div class="feature-info">
                                        <h3 class="fs-24 fw-extrabold text-title">Outpatient Services</h3>
                                        <p class="mb-0">Our doctors are constantly improving their skills by participating in international medical conferences and quality improvement courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap d-flex flex-wrap align-items-center">
                                <a href="about.html" class="btn style-one font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>Read More
                                        <img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/right-arrow-white.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                                <div class="google-ratings position-relative">
                                    <img src="{{ asset('front/img/icons/google.svg') }}" alt="Google Icon">
                                    <h6 class="fs-22 fw-semibold mb-15">4.9/5.0</h6>
                                    <span class="fs-xx-14">Google Ratings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-xxl-4">
                        <div class="wh-img-wrap bg-f position-relative round-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                            <div class="testimonial-slider-one swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style-one position-relative bg-title round-15">
                                            <div class="client-info-wrap d-flex flex-wrap align-items-center">
                                                <div class="client-img rounded-circle">
                                                    <img src="{{ asset('front/img/clients/client-1.jpg') }}" alt="Client" class="rounded-circle">
                                                </div>
                                                <div class="client-info ms-auto">
                                                    <h6 class="fs-22 lh-1 mb-10 fw-extrabold text-white">Steven Borders</h6>
                                                    <span class="d-block text-white">CEO & Founder</span>
                                                </div>
                                            </div>
                                            <ul class="rating style-one list-unstyled">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <p class="fs-xx-14 text-white mb-0">“Our administrative and clinical team is second to none we reiterates thepledge to help all and give hope to those who have lost hope In this endeavor while we have the best of an expert team of doctors taking care of the patients at one hand.”</p>
                                            <img src="{{ asset('front/img/icons/quotation-mark.svg') }}" alt="Icon" class="quote-icon position-absolute">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style-one position-relative bg-title round-15">
                                            <div class="client-info-wrap d-flex flex-wrap align-items-center">
                                                <div class="client-img rounded-circle">
                                                    <img src="{{ asset('front/img/clients/client-3.jpg') }}" alt="Client" class="rounded-circle">
                                                </div>
                                                <div class="client-info ms-auto">
                                                    <h6 class="fs-22 lh-1 mb-10 fw-extrabold text-white">Richard Grene</h6>
                                                    <span class="d-block text-white">Entreprenaur</span>
                                                </div>
                                            </div>
                                            <ul class="rating style-one list-unstyled">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <p class="fs-xx-14 text-white mb-0">“To help all and give hope to those who have lost hope In this endeavor our administrative and clinical team is second to none we reiterates thepledger. while we have the best of an expert team of doctors taking care of the patients at one hand.”</p>
                                            <img src="{{ asset('front/img/icons/quotation-mark.svg') }}" alt="Icon" class="quote-icon position-absolute">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style-one position-relative bg-title round-15">
                                            <div class="client-info-wrap d-flex flex-wrap align-items-center">
                                                <div class="client-img rounded-circle">
                                                    <img src="{{ asset('front/img/clients/client-2.jpg') }}" alt="Client" class="rounded-circle">
                                                </div>
                                                <div class="client-info ms-auto">
                                                    <h6 class="fs-22 lh-1 mb-10 fw-extrabold text-white">Karolyn Basset</h6>
                                                    <span class="d-block text-white">Businessman</span>
                                                </div>
                                            </div>
                                            <ul class="rating style-one list-unstyled">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <p class="fs-xx-14 text-white mb-0">“Awesome service give hope to those who have administrative and clinical team is second to none we reiterates thepledge to help all and lost hope In this endeavor while we have the best of an expert team of doctors taking care of the patients at one hand.”</p>
                                            <img src="{{ asset('front/img/icons/quotation-mark.svg') }}" alt="Icon" class="quote-icon position-absolute">
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-btn d-flex flex-wrap align-items-center justify-content-end">
                                    <button class="prev-btn testimonial-prev d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-left-s-line"></i></button>
                                    <button class="next-btn testimonial-next d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-right-s-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us Section End -->

        <!-- Top Doctors Sections Start -->
        <div class="container style-one pb-90">
            <div class="text-center">
                <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">HINTON TEAM</h6>
                <h2 class="section-title fw-black text-title text-center mb-35" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Meet The Top Rated Doctors</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="doctor-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                        <div class="doctor-img position-relative round-10">
                            <img src="{{ asset('front/img/doctors/doctor-1.jpg') }}" alt="Doctor" class="round-10">
                            <div class="share-action d-flex flex-wrap position-absolute">
                                <div class="share-btn position-relative">
                                    <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                    <ul class="social-profile list-unstyled mb-0 transition">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                                <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-20">
                                <a href="doctors-list.html" class="doctor-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Pathologist</a>
                                <div class="ratings">
                                    <i class="ri-star-fill"></i>
                                    <span class="ms-1">5.0</span>
                                </div>
                            </div>
                            <h3 class="fs-24 fw-extrabold mb-8"><a href="doctor-details.html" class="text-title hover-text-primary link-hover-primary transition">Dr. Demetrius Wright</a></h3>
                            <ul class="doctor-degree list-unstyled mb-15">
                                <li class="d-inline-block">MBBS</li>
                                <li class="d-inline-block">MD</li>
                                <li class="d-inline-block">DM</li>
                                <li class="d-inline-block">PhD</li>
                            </ul>
                            <p class="doctors-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">42 Main Drive Florida 10306</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <a href="availability-checker.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>Availability
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                               <a href="appointment-booking.html" class="position-relative booking-link fs-xx-14 fw-semibold text-title link-hover-title"><img src="{{ asset('front/img/icons/phone-black.svg') }}" alt="Icon" class="position-absolute start-0 top-2">Book Today</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="doctor-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                        <div class="doctor-img position-relative round-10">
                            <img src="{{ asset('front/img/doctors/doctor-2.jpg') }}" alt="Doctor" class="round-10">
                            <div class="share-action d-flex flex-wrap position-absolute">
                                <div class="share-btn position-relative">
                                    <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                    <ul class="social-profile list-unstyled mb-0 transition">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                                <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-20">
                                <a href="doctors-list.html" class="doctor-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Cardiologist</a>
                                <div class="ratings">
                                    <i class="ri-star-fill"></i>
                                    <span class="ms-1">5.0</span>
                                </div>
                            </div>
                            <h3 class="fs-24 fw-extrabold mb-8"><a href="doctor-details.html" class="text-title hover-text-primary link-hover-primary transition">Dr. Patrick Smith</a></h3>
                            <ul class="doctor-degree list-unstyled mb-15">
                                <li class="d-inline-block">MBBS</li>
                                <li class="d-inline-block">PhD</li>
                            </ul>
                            <p class="doctors-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">678 Wetmore St, Florida, USA</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <a href="availability-checker.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>Availability
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                                <a href="appointment-booking.html" class="position-relative booking-link fs-xx-14 fw-semibold text-title link-hover-title"><img src="{{ asset('front/img/icons/phone-black.svg') }}" alt="Icon" class="position-absolute start-0 top-2">Book Today</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="doctor-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                        <div class="doctor-img position-relative round-10">
                            <img src="{{ asset('front/img/doctors/doctor-3.jpg') }}" alt="Doctor" class="round-10">
                            <div class="share-action d-flex flex-wrap position-absolute">
                                <div class="share-btn position-relative">
                                    <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                    <ul class="social-profile list-unstyled mb-0 transition">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                                <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-20">
                                <a href="doctors-list.html" class="doctor-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Neurologist</a>
                                <div class="ratings">
                                    <i class="ri-star-fill"></i>
                                    <span class="ms-1">5.0</span>
                                </div>
                            </div>
                            <h3 class="fs-24 fw-extrabold mb-8"><a href="doctor-details.html" class="text-title hover-text-primary link-hover-primary transition">Dr. Brenton Ottinger</a></h3>
                            <ul class="doctor-degree list-unstyled mb-15">
                                <li class="d-inline-block">MBBS</li>
                                <li class="d-inline-block">MD</li>
                                <li class="d-inline-block">DM</li>
                                <li class="d-inline-block">PhD</li>
                                <li class="d-inline-block">FCPS</li>
                            </ul>
                            <p class="doctors-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">201 James St, New York, USA</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <a href="availability-checker.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>Availability
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                               <a href="online-payment.html" class="position-relative booking-link fs-xx-14 fw-semibold text-title link-hover-title"><img src="{{ asset('front/img/icons/phone-black.svg') }}" alt="Icon" class="position-absolute start-0 top-2">Book Today</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="doctor-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="500">
                        <div class="doctor-img position-relative round-10">
                            <img src="{{ asset('front/img/doctors/doctor-4.jpg') }}" alt="Doctor" class="round-10">
                            <div class="share-action d-flex flex-wrap position-absolute">
                                <div class="share-btn position-relative">
                                    <span class="d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22"><i class="ri-share-line"></i></span>
                                    <ul class="social-profile list-unstyled mb-0 transition">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-instagram-fill"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-column align-items-center justify-content-center round-5 transition"><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                                <button class="add-to-wishlist border-0 d-flex flex-column align-items-center justify-content-center round-5 bg-white text-title fs-22 transition"><i class="ri-heart-3-line"></i></button>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-20">
                                <a href="doctors-list.html" class="doctor-category style-one d-inline-block bg-ash text_secondary fw-medium round-5 transition">Gynocologist</a>
                                <div class="ratings">
                                    <i class="ri-star-fill"></i>
                                    <span class="ms-1">5.0</span>
                                </div>
                            </div>
                            <h3 class="fs-24 fw-extrabold mb-8"><a href="doctor-details.html" class="text-title hover-text-primary link-hover-primary transition">Dr. Scott Graham</a></h3>
                            <ul class="doctor-degree list-unstyled mb-15">
                                <li class="d-inline-block">MBBS</li>
                                <li class="d-inline-block">DM</li>
                                <li class="d-inline-block">PhD</li>
                            </ul>
                            <p class="doctors-location position-relative ps-4"><img src="{{ asset('front/img/icons/pin-black.svg') }}" alt="Icon" class="position-absolute start-0">44A Marine Rd, Florida, USA</p>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <a href="availability-checker.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                    <span>Availability
                                        <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                    </span>
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                                </a>
                               <a href="online-payment.html" class="position-relative booking-link fs-xx-14 fw-semibold text-title link-hover-title"><img src="{{ asset('front/img/icons/phone-black.svg') }}" alt="Icon" class="position-absolute start-0 top-2">Book Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Doctors Sections End -->

        <!-- Work Process Section Start -->
        <div class="bg-ash ptb-120">
            <div class="container style-one">
                <div class="text-center">
                    <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">WORKING PROCESS</h6>
                    <h2 class="section-title title-anim fw-black text-title mb-40" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">How Hinton Appointment Works</h2>
                </div>
                <div class="work-process-wrap d-flex flex-wrap justify-content-lg-between justify-content-center style-one pb-90">
                    <div class="process-card style-one position-relative transition mb-30" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                        <img src="{{ asset('front/img/work-process/right-top-curve-arrow.png') }}" alt="Icon" class="right-arrow">
                        <div class="process-img position-relative rounded-circle">
                            <img src="{{ asset('front/img/work-process/process-1.jpg') }}" alt="Image" class="rounded-circle">
                            <span class="process-counter text_primary font-secondary fw-extrabold fs-18 d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">01</span>
                        </div>
                        <h3 class="fs-24 fw-extrabold text-title text-center mb-18">Search Best Online Professional</h3>
                        <p class="text-center mb-0 px-xxl-5 px-lg-3 mx-xxl-4">Each member of our team is focused on supporting patients with personalized treatment our goal is to create a welcoming</p>
                    </div>
                    <div class="process-card style-one position-relative transition mb-30" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                        <img src="{{ asset('front/img/work-process/right-down-curve-arrow.png') }}" alt="Icon" class="right-arrow">
                        <div class="process-img position-relative rounded-circle">
                            <img src="{{ asset('front/img/work-process/process-2.jpg') }}" alt="Image" class="rounded-circle">
                            <span class="process-counter text_primary font-secondary fw-extrabold fs-18 d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">02</span>
                        </div>
                        <h3 class="fs-24 fw-extrabold text-title text-center mb-18">View Professional Doctor Profile</h3>
                        <p class="text-center mb-0 px-xxl-5 px-lg-3 mx-xxl-4">We are committed to delivering exceptional healthcare services tailored to meet the needs of every patient our center</p>
                    </div>
                    <div class="process-card style-one position-relative transition mb-30" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="400">
                        <div class="process-img position-relative rounded-circle">
                            <img src="{{ asset('front/img/work-process/process-3.jpg') }}" alt="Image" class="rounded-circle">
                            <span class="process-counter text_primary font-secondary fw-extrabold fs-18 d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">03</span>
                        </div>
                        <h3 class="fs-24 fw-extrabold text-title text-center mb-18">Get Your Schedule Appointment</h3>
                        <p class="text-center mb-0 px-xxl-5 px-lg-3 mx-xxl-4">Our medical center is dedicated from preventive care and routine check ups to specialized treatments</p>
                    </div>
                </div>
                <div class="promo-video style-one position-relative bg-f round-20">
                    <a class="play-video d-flex flex-wrap flex-column align-items-center justify-content-center rounded-circle bg-white position-absolute" data-fslightbox="" href="https://www.youtube.com/watch?v=u31qwQUeGuM">
                        <span class="ripple"></span>
                        <i class="ri-play-large-fill"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Work Process Section End -->

        <!-- Blog Section Start -->
        <div class="container style-one pt-120 pb-90">
            <div class="text-center">
                <h6 class="section-subtitle fw-medium font-primary d-inline-block text_secondary position-relative mb-15" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">LATEST NEWS</h6>
                <h2 class="section-title title-anim fw-black text-title mb-40" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">Read Our Latest Insights & Articles</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="blog-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                        <div class="blog-img position-relative img-hover overflow-hidden round-10">
                            <img src="{{ asset('front/img/blog/blog-1.jpg') }}" alt="Blog Image" class="round-10 transition">
                        </div>
                        <div class="blog-info">
                            <a href="posts-by-date.html" class="blog-date text-center d-flex flex-column align-items-center justify-content-center round-10 fs-14 font-secondary bg_secondary text-white"><span class="fs-18  fw-bold ">25</span>Jan</a>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="position-relative fs-15 d-inline-block"><img src="{{ asset('front/img/icons/user-icon.svg') }}" alt="Icon">By<a href="posts-by-author.html" class="text-para hover-text-primary">Admin</a></li>
                                <li class="position-relative fs-15 text-para d-inline-block"><img src="{{ asset('front/img/icons/comment.svg') }}" alt="Icon">02 Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-extrabold mb-15"><a href="blog-details-right-sidebar.html" class="text-title link-hover-primary hover-text-primary">Benefiting From Healthcare Shouldn’t Be A Matter Of Luck</a></h3>
                            <p class="mb-28">Our medical center we are committed to delivering exceptional healthcare services tailored to meet the needs of every patient our center is equipped</p>
                            <a href="blog-details-right-sidebar.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                <span>Read More
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                </span>
                                <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-card style-one round-20 mb-30 transition" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="350">
                        <div class="blog-img position-relative img-hover overflow-hidden round-10">
                            <img src="{{ asset('front/img/blog/blog-2.jpg') }}" alt="Blog Image" class="round-10 transition">
                        </div>
                        <div class="blog-info">
                            <a href="posts-by-date.html" class="blog-date text-center d-flex flex-column align-items-center justify-content-center round-10 fs-14 font-secondary bg_secondary text-white"><span class="fs-18  fw-bold ">22</span>Jan</a>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="position-relative fs-15 d-inline-block"><img src="{{ asset('front/img/icons/user-icon.svg') }}" alt="Icon">By<a href="posts-by-author.html" class="text-para hover-text-primary">Admin</a></li>
                                <li class="position-relative fs-15 text-para d-inline-block"><img src="{{ asset('front/img/icons/comment.svg') }}" alt="Icon">03 Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-extrabold mb-13"><a href="blog-details-right-sidebar.html" class="text-title link-hover-primary hover-text-primary">Caring For The Whole Patient Not Just Your Symptoms</a></h3>
                            <p class="mb-28">Our medical center we are committed to delivering exceptional healthcare services tailored to meet the needs of every patient our center is equipped</p>
                            <a href="blog-details-right-sidebar.html" class="btn style-three font-secondary fw-semibold position-relative z-1 round-10">
                                <span>Read More
                                    <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-left">
                                </span>
                                <img src="{{ asset('front/img/icons/long-arrow-right-blue.svg') }}" alt="Icon" class="transition icon-right">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->


       
        <!-- Brand Section Start -->
        <div class="bg-ash ptb-120">
            <div class="container style-one">
                <h3 class="fs-20 fw-semibold text-title text-center mb-55">TRUSTED BY MORE THAN <span class="text_primary">100+</span> COMPANIES WORLDWIDE</h3>
                <div class="brand-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-1.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-2.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-3.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-4.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-5.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-6.svg') }}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-1.svg')}}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-2.svg')}}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-logo">
                                <img src="{{ asset('front/img/brand/brand-3.svg')}}" alt="Brand Logo" class="d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Section End -->
        <!-- Home Page End -->
        @endsection