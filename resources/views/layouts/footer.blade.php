<!-- Footer Start -->
<div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <a href="{{ url('/') }}" class="navbar-brand p-0" style="width: 50%;">
                        <img src="{{ url('/assets/frontend/img/logo.png')}}" class="img-fluid w-100" alt="Image">
                    </a>
                    <p class="m-0 p-0"  style="line-height: 20px;"> <a href="mail:{{ get_theme_setting('email') }}" >Mail ID : {{ get_theme_setting('email') }}</a></p>
                    <p class="m-0 p-0 mb-3"  style="line-height: 20px;"> <a href="tel:{{ get_theme_setting('mobile') }}" >Mobile : {{ get_theme_setting('mobile') }}</a></p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Quick Links</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Categories</h4>
                    @foreach($categories as $category)
                        <a href="{{ url('/category/'.$category->slug) }}"><i class="fas fa-angle-right me-2"></i> {{$category->name}}</a>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Address</h4>
                    <p style="line-height: 20px;"> HO address : 9, Brabourne Road, Kolkata 700 001, India </p>
                    <p style="line-height: 20px;"> Factory address : 9, Brabourne Road, Kolkata 700 001, India </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lead-generate-popup" class="white-popup mfp-hide">
    <h5 class="text-center">GET IN TOUCH</h2>
     @include('common.leadCaptureForm')
</div>