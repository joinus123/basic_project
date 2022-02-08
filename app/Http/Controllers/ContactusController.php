<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homesitepage;
use App\Models\Socialmedia;

class ContactusController extends Controller
{
    public function Contact_us()
    {
        $home_data=Homesitepage::all();
        $socialmedia_icon=Socialmedia::all();
        return view('frontend.contactus',compact('home_data','socialmedia_icon'));
    }

}
