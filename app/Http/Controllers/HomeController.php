<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Testinomial;
use App\Models\Ourservice;
use App\Models\Homesitepage;
use App\Models\AboutusContent;
use App\Models\Socialmedia;
class HomeController extends Controller
{
       public function index()
   {
        $data_testimonial=Testinomial::all();
        $data=Ourservice::all();
        $home_data=Homesitepage::all();
        $socialmedia_icon=Socialmedia::all();
        $aboutus_content=AboutusContent::all();
       return view('frontend.index',compact('aboutus_content','data','home_data','socialmedia_icon'))->with('data_testimonial',$data_testimonial);
   }


}
