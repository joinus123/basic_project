<?php

namespace App\Http\Controllers;

use App\Models\Ourservice;
use Illuminate\Http\Request;
use App\Models\Testinomial;
use App\Models\Homesitepage;

class ServiceController extends Controller
{
       public function service(){

        $data_testimonial=Testinomial::all();
        $data=Ourservice::all();
        $home_data=Homesitepage::all();
        return view('frontend.service',compact('home_data','data'))->with('data_testimonial',$data_testimonial);
    }
}
