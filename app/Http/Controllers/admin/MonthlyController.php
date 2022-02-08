<?php

namespace App\Http\Controllers\admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Monthly;


class MonthlyController extends Controller
{
    public function view_form()
    {
        return view('backend.monthly.create');
    }

    public function add_record(Request $request)
    {
        // dd($request->all());
        // print_r($request->all());
        $this->validate($request,[
            'h1'=>'required|max:255',
            'p1'=>'required',
            'current_amount'=>'required',
            'percentage'=>'required',
            'target_amount'=>'required',
            'content_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
         ]);






        $add_monthly=[
        'h1'               =>$request->h1,
        'p1'               =>$request->p1,
        'current_amount'   =>$request->current_amount,
        'target_amount'    =>$request->target_amount,
        'percentage'       =>$request->percentage,

    ];

    if($request->hasfile('content_image'))
    {
      $imageName =time().'.'.$request->content_image->extension();
      $request->content_image->move(public_path('images'), $imageName);
      $add_monthly['image']=$imageName;
    }

        Monthly::create($add_monthly);
        return redirect()->route('monthly-list')->with('message','data insert successfully');
    }

    public function monthly_list()
   {
       $monthly_link=Monthly::all()->toArray();
       return view('backend.monthly.list',compact('monthly_link'));
   }

   public function editform_monthly($id){

     $views=Monthly::find($id)->toArray();
     return view('backend.monthly.edit',compact('views'));
   }

   public function update_monthly(Request $request)
   {


    $update_monthly=Monthly::find($request->id);

    $update_monthly->h1 = $request->h1;
    $update_monthly->p1 = $request->p1;
    $update_monthly->current_amount = $request->current_amount;
    $update_monthly->percentage = $request->percentage;
    $update_monthly->target_amount = $request->target_amount;
    $update_monthly->save();

    return redirect()->route("monthly-list")->with('message','Record has Been updated');
  }

   public function delete_list($id)
   {
       Monthly::where('id',$id)->delete();
       return redirect()->route('monthly-list')->with('message','Record has been Delete Succesfully!');
   }
}
