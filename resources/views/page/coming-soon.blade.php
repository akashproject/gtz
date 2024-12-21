@extends('layouts.main')
    @section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown">{{ $contentMain->name }}</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">{{ $contentMain->name }}</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
    <section id="blog-item">
		<div class="container">
			<div class="blog-content-details">
				<div class="row">
                    <div class="text-center py-5 my-5">
                        <h1 style="text-align: center;">
                            The page is Under the Development <br />
                            <span style="font-size: 36pt;">Coming Soon</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection