@extends('layouts.main')

    @section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb"  style="background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)), url({{ url('assets/frontend/img/contact-us.jpg') }});background-repeat: no-repeat;background-size: cover;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $contentMain->name }}</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">{{ $contentMain->name }}</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <!-- Contact Start -->

        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style mb-4">
                        <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                    </div>
                </div>

                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="project" placeholder="Country/Location">
                                        <label for="project">Country/Location</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject">
                                        <label for="subject">Your Company Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <select class="form-control bg-transparent border border-white" id="subject">
                                            <option selected>Select Category</option>
                                            @foreach(allCategories() as $key => $category)
                                            <option value="{{$category->name}}" >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="subject">Your Company Name</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent border border-white" placeholder="Write Your Enquiry" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="form-group disclaimer text-left text-white">
                                    <p class=" text-white" style="margin:0">
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fab fa-whatsapp" style="color: green;"></i> whatsapp. 
                                    </p>
                                    <p class=" text-white" >
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" class="text-white" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                    </p>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-light text-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Correspondence</h4>
                                <p class="mb-0 text-white">9, Brabourne Road, Kolkata 700 001, India</p>
                            </div>
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Phone</h4>
                                <p class="mb-0 text-white" ><a href="tel:+913322429900" class="text-white">+91 33 2242 9900</a></p>
                            </div>
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Email</h4>
                                <p class="mb-0 text-white"><a href="mailto:connect@gtzworld.com" class="text-white"> connect@gtzworld.com</a></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">

                        <div class="d-flex justify-content-center mb-4">

                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>

                        </div>

                        <div class="rounded h-100">

                            <iframe class="rounded w-100" 

                            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.1083000405943!2d88.34861407405947!3d22.575052432882853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a531b924c3%3A0x178c2b2c6e4fb57f!2sGTZ%20(INDIA)%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1732213389485!5m2!1sen!2sin" 

                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Contact End -->

    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection