<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homesitepage;
use App\Models\Testinomial;
use App\Models\Socialmedia;
class EventsController extends Controller
{
    public function events()
    {
        $home_data=Homesitepage::all();
        $data_testimonial=Testinomial::all();
        $socialmedia_icon=Socialmedia::all();
        return view('frontend.events',compact('home_data','socialmedia_icon'))->with('data_testimonial',$data_testimonial);;
    }
}
