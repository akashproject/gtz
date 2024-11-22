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

        <!-- Products Start -->
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
                    @foreach(allCategories() as $key => $category)
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="{{ getSizedImage($category->featured_image) }}" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light pb-4 pt-2">
                                <div class="course-meta pb-4">
                                    <span class="course-category bold-font"><i class="fa fa-user"></i> 10.8k Sold</span>
                                    <div class="course-rate ul-li">
                                        
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="course-category bold-font"> (1.2k) Ratings </span>
                                </div>
                                <div class="service-content-inner text-center">
                                    <h4 class="mb-3"> {{ $category->name }}</h4>
                                    
                                    <p class="mb-4">{!! $category->excerpt !!}</p>
                                    <a href="{{ route('view-products',$category->slug) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Checkout More Products</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection