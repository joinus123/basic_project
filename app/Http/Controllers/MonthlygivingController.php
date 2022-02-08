<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testinomial;
use App\Models\Ourservice;
use App\Models\Homesitepage;
use App\Models\AboutusContent;
use App\Models\Socialmedia;
use App\Models\Monthly;
class MonthlygivingController extends Controller
{
   public function monthly(){

    $home_data=Homesitepage::all();
    $data_testimonial=Testinomial::all();
    $socialmedia_icon=Socialmedia::all();
    $data=Ourservice::all();
    $aboutus_content=AboutusContent::all();
    $content_monthly=Monthly::all();
    return view('frontend.monthlygiving',compact('aboutus_content','data','home_data','socialmedia_icon','content_monthly'))->with('data_testimonial',$data_testimonial);
   }
}
