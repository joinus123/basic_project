<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homesitepage;
use App\Models\Testinomial;
class EventsController extends Controller
{
    public function events()
    {
        $home_data=Homesitepage::all();
        $data_testimonial=Testinomial::all();
        return view('frontend.events',compact('home_data'))->with('data_testimonial',$data_testimonial);;
    }
}
