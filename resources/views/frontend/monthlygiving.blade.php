@extends('frontend.layout')

@section('main_content')

<section class="index-banner monthly-giving-banner inner-banner">
	<div class="container">
		<div class="text-box" data-aos="zoom-in" data-aos-duration="1300">
			<h1 class="heading">Monthly Giving</h1>
		</div>
	</div>
	<div class="index-abs-wrap" data-aos="zoom-in" data-aos-duration="1200">
		<div class="abs-img-1 abs-img">
			<img src="assets/images/index-banner-abs-1.png" alt="img" class="img-fluid">
		</div>
		<div class="abs-img-2 abs-img">
			<img src="assets/images/index-banner-abs-2.png" alt="img" class="img-fluid">
		</div>
	</div>
</section>

<section class="index-sec-1 covid-sec-1 about-sec-1 monthly-giving-sec-1">
	<div class="container">
		<div class="top-text-box">
			<div class="img-box">
				<img src="assets/images/page-logo-img.png" alt="img" class="img-fluid">
			</div>
			<h1 class="heading">Monthly Giving</h1>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 col-12 order-lg-1 order-md-2 order-2">
				<div class="img-box gen-radius" data-aos="fade-right" data-aos-duration="1000">
					<img src="assets/images/monthly-giving-sec-1-img.png" class="img-fluid" alt="img">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 order-lg-2 order-md-1 order-1">
				<div class="text-box" data-aos="fade-left" data-aos-duration="1000">
					<p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus pendisse ultrices gravida. Risus commodo vive rra maecenas accumsan lacus vel facilisis.</p>
					<ul class="list-unstyled">
						<li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </li>
						<li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </li>
						<li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </li>
					</ul>
					<a href="#!" class="purple-btn gift-btn">Make a gift</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="monthly-giving-sec-2">
	<div class="container">
		<div class="row justify-content-md-center">






           @foreach ($content_monthly as $item)


			<div class="col-lg-4 col-md-6 col-12">

				<div class="gift-card mb-0" data-aos="fade-up" data-aos-duration="1000">
					<div class="img-box">
						<img src="{{asset('images/'.$item->image)}}" alt="img" class="img-fluid w-100">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<p class="abs-tag">Successful</p>
					</div>
					<div class="text-box-1">
						<p class="text-col-1">Current <span>${{$item->current_amount}}</span></p>
						<p class="text-col-2">{{$item->percentage}}%</p>
						<p class="text-col-3">Target <span>${{$item->target_amount}}</span></p>
					</div>
					<div class="text-box-2">
						<p class="heading">{{$item->h1}}</p>
						<p class="tagline">{!!$item->p1!!}</p>
					</div>
				</div>
            </div>
            @endforeach

		</div>
	</div>
</section>

<section class="index-sec-2 career-sec-1 monthly-giving-sec-3">
	<div class="container">
		<div class="text-box">
			<h1 class="heading text-capitalize">How Does the Tax Credit Work?</h1>
			<p class="tagline">Lorem Lipsum</p>
			<p class="tagline-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p>
		</div>
		<div class="row index-2-cards">
            @include('frontend.include.ourservice')
		</div>
	</div>
</section>

<section class="index-sec-3">
	<div class="container">
		<div class="index-content">
			<div class="content-box">
				<div class="text-box" data-aos="fade-right" data-aos-duration="1300">
					<h1 class="heading">Help Other People</h1>
					<h1 class="sub-heading">Our Fingerprints on the Lives  We Touch never Fade.</h1>
				</div>
				<a href="#!" class="purple-btn" data-aos="fade-left" data-aos-duration="1300">Start Donating</a>
			</div>
		</div>
		<div class="index-3-abs">
			<img src="assets/images/index-sec-3-abs-img.png" alt="img" class="img-fluid">
		</div>
	</div>
</section>

<section class="index-sec-5 contact-sec-2">
	<div class="container">
		<div class="text-box">
			<h1 class="heading">Our Testimonial</h1>
			<p class="tagline">Client Feedback</p>
		</div>
		<div class="client-slider-wrap">
			<div class="swiper-container mySwiper client-slider">
				<div class="swiper-wrapper">
                    @include('frontend.include.testinomial')
				</div>
			</div>
		</div>
		<div class="next"><i class="fas fa-chevron-right"></i></div>
		<div class="prev"><i class="fas fa-chevron-left"></i></div>
	</div>
</section>



@stop
