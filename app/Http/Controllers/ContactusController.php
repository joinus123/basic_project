<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homesitepage;
class ContactusController extends Controller
{
    public function Contact_us()
    {
        $home_data=Homesitepage::all();
        return view('frontend.contactus',compact('home_data'));
    }

}
