@foreach ($data_testimonial as  $item )
<div class="swiper-slide">
   <div class="slide-card">
      <div class="img-box">
         <img src="{{asset('images/'.$item->client_image)}}" alt="img" class="img-fluid">
         <p class="name"> {{$item->client_name}} <br>
            <span></span>
         </p>
      </div>
      <p class="tagline">{!!$item->description!!}</p>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
   </div>
</div>
@endforeach
