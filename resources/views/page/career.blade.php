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
					<div class="blog-list-view">
						@foreach(getJobs() as $value)
						<div class="list-career-item my-5">
							<div class="row">								
								<div class="col-md-9">
									<div class="blog-title-content headline">
										<h3><a href="#">{{$value->name}}</a></h3>
										<div class="blog-content">
											{!! $value->description !!}
										</div>
										
										<ul class="career-tag" >
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" ><i class="fas fa-map-marker" > </i> {{ $value->location }} </a>
											</li>
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" > <i class="fas fa-clock" > </i> {{ $value->type }}</a>
											</li>
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" > <i class="fas fa-rupee-sign"></i> {{ $value->salary }}</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-2 career-apply">
									<a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Apply Now</a>
								</div>
							</div>
						</div>
						@endforeach
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