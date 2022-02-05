@foreach ($data as $view)
<div class="col-lg-3 col-md-4 col-sm-6 col-12">
   <div class="index-card text-center" data-aos="fade-up" data-aos-duration="1000">
      <div class="img-box">
         <img src="{{asset('images/'.$view->icon_image)}}">
      </div>
      <h1 class="title">{{$view->icon_heading}}</h1>
      <p class="tagline">{!!$view->description!!}</p>
   </div>
</div>
@endforeach
