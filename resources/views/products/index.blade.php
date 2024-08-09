@extends('layouts.main')
    @section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Products</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">What We Do</h4>
                    </div>
                    <h1 class="display-3 mb-4">Our Product Range</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <img src="{{ url('/assets/frontend/img/th1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5 class="mb-4">DEGREASING CHEMICAL</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!</p>
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >1</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 11</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Versatile immersion degreaser for ferrous & non-ferrous components.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >2</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 18</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Multipurpose immersion degreaser for ferrous and non ferrous components.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >3</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 18LT</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Multipurpose immersion degreaser for ferrous and non ferrous components.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >4</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >5</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >6</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >7</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >8</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <img src="{{ url('/assets/frontend/img/th1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5 class="mb-4">CYANIDE ZINC PLATING CHEMICALS</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!</p>
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >1</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >GETSAL ZN(CY)</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Versatile immersion degreaser for ferrous & non-ferrous components.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >2</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >	MSP 31</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">An advanced purifier to remove heavy metal impurities from cyanide zinc bath</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >3</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >ULTRABRITE 725</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Cyanide zinc plating brightener for Rack & Barrel</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >4</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >ULTRABRITE 835</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">An advanced Cyanide zinc plating brightener for Rack & Barrel</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >5</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >ULTRABRITE 835P</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">An advanced Cyanide zinc plating brightener for Rack & Barrel</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >6</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >ULTRABRITE 925</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">An advanced Cyanide zinc plating brightener for Rack & Barrel
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >7</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="row-cols-1 feature-item p-2">
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="feature-icon">
                                                        <div class="p-3 d-inline-flex rounded">
                                                            <h2 class="sl_no" >8</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="product_title" >UNIKLEEN 1919</h2>
                                                    <span class="tag" > TDS </span><span class="tag"> MSDS </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="feature-content d-flex flex-column px-3 mb-3">
                                                <p class="mb-0">Surfactant enriched, high efficiency, multipurpose powder alkaline soak cleaner</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <img src="{{ url('/assets/frontend/img/th1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5 class="mb-4">CYANIDE ZINC PLATING CHEMICALS</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


    


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients are Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="{{ url('/assets/frontend/img/testimonial-img.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection