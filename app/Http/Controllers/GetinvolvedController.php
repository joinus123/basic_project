<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homesitepage;
use App\Models\Ourservice;
use App\Models\Testinomial;
class GetinvolvedController extends Controller
{
   public function getinvolved()
   {
         $data_testimonial=Testinomial::all();
         $data=Ourservice::all();
         $home_data=Homesitepage::all();
         return view('frontend.getinvolved',compact('data','home_data'))->with('data_testimonial',$data_testimonial);
   }
}
