@extends('layouts.main')
    @section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
                    <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $contentMain->name }}</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">{{ $contentMain->name }}</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="{{ url('/assets/frontend/img/about-1.jpg') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <div class="about-img-inner">
                                <img src="{{ url('/assets/frontend/img/new-pro-launch-img.jpg') }}" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">15 years experience</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">About Us</h4>
                            <h2 class="display-3 mb-4">The Chemistry of Excellence</h2>
                            <p class="mb-4">Our determination and commitment to the unrelenting pursuit of excellence is the key to our motivation.</p>
                            <p class="mb-4">GTZ (India) Pvt Ltd, once the Indian arm of US based trading house GETZ Bros & Co Inc started its operations indenting and trading chemicals in 1936. Committed to the philosophy of exceeding by excellence, the company collaborated with a Fortune 500 company, WITCO Corporation USA, a world leader in speciality chemicals in 1985 and ventured into the production of Metal Finishing Chemicals. Ever since GTZ has been engaged in production of world class finishing solutions.</p>
                            
                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="section-title text-center mb-5">
                        <h2 class="display-3 mb-4">Core Values</h2>
                        <h3 class="mb-4">The molecular structure</h3>
                        <p class="mb-2">Integrity and strong business ethics are the foundation to the way we conduct our business.</p>
                        <p class="mb-2">In the constantly changing and multi-cultural environment of International business, in which, we operate, we strive to adopt and adapt to meet the requirements of our customers and society.</p>
                        <p class="mb-4">As a responsible corporate citizen, we ensure that we deliver in a healthy, safe and environment friendly manner.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h2 class="display-3 mb-4">GTZ Management & Expertise</h2>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="{{ url('/assets/frontend/img/team-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Managing Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="{{ url('/assets/frontend/img/team-2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="{{ url('/assets/frontend/img/team-3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Project Head</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="{{ url('/assets/frontend/img/team-4.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Tech Team Leader</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h2 class="display-3 mb-4">Global Presence</h2>
                            <h3 class="mb-4">The real catalyst</h3>
                            <p class="mb-2">We do what we do for society and our clients.</p>
                            <p class="mb-2">Their requirements are our motivation.</p>
                            <p class="mb-4">We are driven relentlessly to innovate, adopt and adapt to meet their trust reposed in us. This has led to a widespread clientele not only throughout India, but in many countries, Ethiopia, China, India, Kenya, South Africa, Germany, Indonesia, Togo, West Africa, Bangladesh, UAE, Nigeria, Tanzania, Korea, Egypt, Sri Lanka</p>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="{{ url('/assets/frontend/img/location-map.jpg') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- About Start -->
        <div class="container-fluid quality_r_n_d py-5">
            <div class="text-center">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Quality Assurence</h4>
                    </div>
                    <h3 class="display-3 mb-4">Quality and R & D</h3>
                </div>
            </div>
            <div class="r_n_d_container" >
                <div class="r_n_d_row">
                    <div class="left_image">
                        <img src="{{ url('/assets/frontend/img/cs_steel-industry_hero.png') }}" class="img-fluid w-100" style="object-fit: cover;" alt="Image">
                    </div>
                    <div class="right_content">
                        <h3 class="text-primary">Quality Assurance</h3>
                        <h4>The litmus test</h4>
                        <p> Our responsibility for quality products begins with product development. To analyze and avoid risks for potential users and ultimate consumers is as important as the selection of appropriate raw materials, reliable suppliers and partners for maintaining the highest standards of product efficacy. </p>
                        <p> GTZ products go through a series of stringent tests, systematically, as per the guidelines of ISO 9001, at every stage, in accordance to various International standards before they are delivered to our customer. </p>
                        <p>The quality and consistency of performance is the hallmark of all GTZ products with the aim to exceed customer expectation.<p>
                        <p>We deliver constantly, consistently.</p>
                    </div> 
                </div>
                <div class="r_n_d_row">
                    <div class="right_content text-end">
                        <h3 class="text-primary">R & D</h3>
                        <h4>The latent heat</h4>
                        <p>GTZ is synonymous with innovation and customization. Development includes not only sporadic pioneering innovations but also a constant series of fundamental development. Our products make our customers’ products more effective. Thus, by continuously improving our products, we improve our customers’ products. We also focus on constant improvements in our environmental impact across the whole value chain.</p>
                        <p>Our R&D comprises of a team of qualified scientists working incessantly to develop high quality, cost effective speciality chemicals to satisfactorily meet both the existing and emerging needs of the valued customers.</p>
                        <p>Associating with the leading technological organizations allows the company to enhance the knowledge base and remain abreast with the latest technological progress.</p>
                    </div>
                    <div class="left_image">
                        <img src="{{ url('/assets/frontend/img/auxilaries1.jpg') }}" class="img-fluid w-100" style="object-fit: cover;" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection