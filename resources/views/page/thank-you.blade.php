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
    <div class="container">
		<div class="row justify-content-center mt60 mt-5">
			<div class="col-md-6 text-center">
				<div class="form-success-content">
					<span class="success-icon"> <i class="fas fa-check"></i> </span>
					<h4> Thank You! Your Application Submitted Successfully</h4>
				</div>
			</div>
		</div>
	</div>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection