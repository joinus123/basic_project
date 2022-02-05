<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testinomial;
use App\Models\Ourservice;
use App\Models\Homesitepage;
use App\Models\AboutusContent;
class MonthlygivingController extends Controller
{
   public function monthlygiving(){

    $home_data=Homesitepage::all();
    $data_testimonial=Testinomial::all();
    $data=Ourservice::all();
    $aboutus_content=AboutusContent::all();
    return view('frontend.monthlygiving',compact('aboutus_content','data','home_data'))->with('data_testimonial',$data_testimonial);
   }
}
