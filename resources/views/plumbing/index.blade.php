@extends('plumbing.layout.master')

@section('content')
    <section id="home" class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
        <div class="swiper h-100 magic-cursor swiper-light-pagination"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/plumbing/images/demo-pluming-slider-01.png') }}');">
                   
                </div>

                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/plumbing/images/demo-pluming-slider-02.png') }}');">
                    
                </div>

                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/plumbing/images/demo-pluming-slider-03.png') }}');">
                    
                </div>

            </div>

            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none"></div>

            <div
                class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
                <i class="bi bi-arrow-left-short"></i></div>
            <div
                class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
                <i class="bi bi-arrow-right-short"></i></div>

        </div>
    </section>

    <section id="about" class="position-relative">
        <div class="container">
            
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 md-mb-50px"
                    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    
                        <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
                            <img src={{ asset('assets/plumbing/images/demo-plumbing-about.png') }} class="w-100 border-radius-6px" alt="">
                            <a href="https://www.youtube.com/watch?v=Nmfj3GNQJWs"
                                class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                                <span>
                                    <span class="video-icon bg-white">
                                        <i class="fa-solid fa-play text-dark-gray"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr border border-color-white"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
    
                        </figure>
                </div>
                
                <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">The Best Plumbing Solutions for Your Home and Business.</h2>
                    <p class="w-90 lg-w-100">Our expert plumbing services cover everything from repairs to installations, ensuring reliable and efficient solutions for all your plumbing needs.</p>
                    <div class="icon-with-text-style-08 mb-10px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                                <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fw-500">Our values connect us and guide us.</span>
                            </div>
                        </div>
                    </div>
                    <div class="icon-with-text-style-08 mb-10px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                                <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fw-500">We are committed to sustainable growth.</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35px d-flex flex-wrap">
                        <a href="#contact"
                            class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-right me-30px">
                            <span>
                                <span class="btn-text">Contact Us</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <div class="feature-box feature-box-left-icon-middle xs-mt-20px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded bg-base-color w-60px h-60px rounded-circle me-15px">
                                <i
                                    class="feather icon-feather-phone-call align-middle icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block fw-500">Get in touch</span>
                                <a href="tel:+1-(307)-204-0086" class="d-block text-dark-gray fw-700">+1-(307)-204-0086</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="ps-5 pt-2 pb-2 pe-5 lg-ps-2 lg-pe-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="image-gallery-style-02 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large"
                        style="position: relative; height: 552.718px;">
                        <li class="grid-sizer"></li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 0px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-01.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-01.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 0px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-02.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-02.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-03.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-03.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-04.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-04.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-05.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-05.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-06.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-06.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-07.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-07.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/plumbing/images/demo-plumbing-gallery-08.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/plumbing/images/demo-plumbing-gallery-08.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="overflow-hidden bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-3 xs-mb-2">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [0, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                    <span
                        class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Professional
                        services</span>
                    <h2 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Plumbing services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0"
                        data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 300000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper pt-30px pb-30px">
                                
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            
                                            <div class="#services">
                                                <a href="demo-logistics-our-services.html"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Drain Cleaning</a>
                                                <p class="mb-15px">Clearing blockages and ensuring smooth drainage for sinks, showers, and sewer lines.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-services-01.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            
                                            <div class="services-box-content">
                                                <a href="#services"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Pipe Installation and Repair</a>
                                                <p class="mb-15px">Installing new pipes or repairing damaged ones to ensure proper water flow and prevent leaks.</p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-services-04.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            
                                            <div class="services-box-content">
                                                <a href="#services"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Water Heater Installation and Repair</a>
                                                <p class="mb-15px">Expert installation and maintenance of water heaters for energy efficiency and reliable hot water supply.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-services-02.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            
                                            <div class="services-box-content">
                                                <a href="#services"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Leak Detection and Repair</a>
                                                <p class="mb-15px">Identifying and fixing hidden leaks to prevent water damage and reduce water bills.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-services-03.png') }}')"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="cover-background mb-5" style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-testimonial.png') }}')">
        <div class="opacity-extra-medium bg-dark-gray d-xl-none d-block"></div>
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10"
                    data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 lh-22 fw-600 mb-15px d-inline-block text-uppercase text-white border-bottom border-2 border-color-base-color xs-border-bottom-0">A
                        few good reasons</span>
                    <h2 class="fw-600 text-white">Here is what our clients have to say.</h2>
                    <div class="swiper position-relative"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">The team did an amazing job installing my new water heater. They were professional, efficient, and the price was fair. I'll definitely call them again for future needs.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src={{ asset('assets/plumbing/images/demo-corporate-testimonials-01.png') }}
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Alexander harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">I’m so impressed with the quality of work. They fixed my clogged drains and even gave tips to prevent future issues. Great service and very friendly!</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src={{ asset('assets/plumbing/images/demo-corporate-testimonials-02.png') }}
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Shoko mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">I had a major leak in my kitchen, and the plumber arrived within an hour! They fixed it quickly, and their service was top-notch. Highly recommend!</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src={{ asset('assets/plumbing/images/demo-corporate-testimonials-03.png') }}
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Leonel mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex">
                            <!-- start slider navigation -->
                            <div
                                class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white-transparent-extra-light">
                                <i class="bi bi-arrow-left-short text-white icon-very-medium"></i></div>
                            <div
                                class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white-transparent-extra-light">
                                <i class="bi bi-arrow-right-short text-white icon-very-medium"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="ps-8 pb-5 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 py-0">
        <div class="container-fluid">
            <div
                class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
                <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                    <span
                        class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">World
                        best pluming</span>
                    <h2 class="fw-700 text-dark-gray ls-minus-1px mb-45px">How we can help you!</h2>
                    <!-- start contact form -->
                    <form action="#" method="post" class="row contact-form-style-01">
                        <div class="col-md-12 mb-30px sm-mb-20px">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-person"></i></span>
                                <input class="input-name box-shadow-double-large form-control required" type="text"
                                    name="name" placeholder="Your name" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input class="box-shadow-double-large form-control required" type="email"
                                    name="email" placeholder="Your email" />
                            </div>

                        </div>
                        <div class="col-md-12 mb-30px">


                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat"></i></span>
                                <textarea class="box-shadow-double-large form-control" cols="40" rows="4" name="message"
                                    placeholder="Your message"></textarea>
                            </div>
                        </div>
                        <div class="col-auto text-center text-md-end sm-mt-20px lg-mb-15px">
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn btn-dark-gray btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow"
                                type="submit">
                                <span>
                                    <span><i class="feather icon-feather-mail"></i></span>
                                    <span class="btn-double-text" data-text="Submit">Submit</span>
                                </span>
                            </button>
                        </div>
                        <div class="col-xl-7 align-self-center last-paragraph-no-margin">
                            <p class="fs-16 lh-24 w-80 xxl-w-100">*We are committed to protecting your <a href="#"
                                    class="text-dark-gray text-decoration-line-bottom fw-500">privacy.</a> We will never
                                collect information about you.</p>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
                <div class="col-lg-4 md-h-700px sm-h-500px">
                    <div class="cover-background background-position-center-top h-100"
                        style="background-image: url('{{ asset('assets/plumbing/images/demo-plumbing-contact.png') }}');">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5661.498854028235!2d-92.959768!3d44.806295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7cfddb42effd1%3A0xc8f4a00e9b8466f9!2s9853%20Hamlet%20Ln%20S%2C%20Cottage%20Grove%2C%20MN%2055016!5e0!3m2!1sen!2sus!4v1728542101752!5m2!1sen!2sus"  height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection
