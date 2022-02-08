<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Socialmedia;

class SocialmediaController extends Controller
{
    public function create_form()
    {
        return view('backend.socialmedia.create');
    }

    public function add_process(Request $request)
    {
        // dd($request->all());
        $add_socialmedia=[
        'facebook_icon'   =>$request->facebook_icon,
        'instragram_icon' =>$request->instragram_icon,
        'twitter_icon'    =>$request->twitter_icon,
        'linkedin_icon'   =>$request->linkedin_icon,
        ];

        Socialmedia::create($add_socialmedia);
        return redirect()->route('socialmedia-list')->with('message','data insert successfully');
    }

   public function socialmedia_list()
   {
       $socialmedia_link=Socialmedia::all()->toArray();
       return view('backend.socialmedia.list',compact('socialmedia_link'));
   }

   public function editform_socialmedia($id){

     $views=Socialmedia::find($id)->toArray();
     return view('backend.socialmedia.edit',compact('views'));
   }

   public function update_socialmedia(Request $request)
   {


    $update_socialmedia=Socialmedia::find($request->id);

    $update_socialmedia->facebook_icon = $request->facebook_icon;
    $update_socialmedia->instragram_icon = $request->instragram_icon;
    $update_socialmedia->twitter_icon = $request->twitter_icon;
    $update_socialmedia->linkedin_icon = $request->linkedin_icon;
    $update_socialmedia->save();

    return redirect()->route("socialmedia-list")->with('message','Record has Been updated');
  }

   public function delete_list($id)
   {
       Socialmedia::where('id',$id)->delete();
       return redirect()->route('socialmedia-list')->with('message','Record has been Delete Succesfully!');
   }
}
