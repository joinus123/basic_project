<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testinomial;
use App\Models\Homesitepage;
use App\Models\AboutusContent;
use App\Models\Socialmedia;

class AboutusController extends Controller
{
    public function aboutus()
    {
        $data_testimonial=Testinomial::all();
        $home_data=Homesitepage::all();
        $aboutus_content=AboutusContent::all();
        $socialmedia_icon=Socialmedia::all();
        return view('frontend.aboutus',compact('aboutus_content','home_data','socialmedia_icon'))->with('data_testimonial', $data_testimonial);
    }

}

