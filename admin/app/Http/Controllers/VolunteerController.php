<?php

namespace App\Http\Controllers;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class VolunteerController extends Controller
{
            /*=========================Fetch Datat=====================================*/

    public function fetchall(){
        $show = volunteer::all();
        return view('volunteers', compact('show'));
    }


        /*===========================insert data ===================================*/



    public function create(){
        return view('volunteerInsert');
    }

    public function store(Request $request){

        $img= $request->file('img');
        $imgname=$img->getClientOriginalName();
        $img-> move(public_path('files'), $imgname);
        $img_store= $imgname;
      

        $vol = new volunteer;
        $vol-> volunteer_name=$request->input('name');
        $vol-> volunteer_email=$request->input('email');
        $vol-> volunteer_password=$request->input('password');
        $vol-> volunteer_img=$imgname;
        $vol->save();
        return redirect('volunteers');
    }
  /*==========================Delete Data====================================*/


  public function destroy($id)
  {
    DB::table('volunteers')->where('volunteer_id', $id)->delete();
    return redirect('volunteers');
  }

  /*==========================Edit Data====================================*/


  public function edit($id)
  {
      $volEdit = volunteer::find($id);
      return view('volunteerUpdate', compact('volEdit'));

  }

  public function update(Request $request, $id)
  {

    $img= $request->file('img');
    $imgname=$img->getClientOriginalName();
    $img-> move(public_path('files'), $imgname);
    $img_store= $imgname;

    $volEdit = volunteer::find($id);
    $volEdit->volunteer_name= $request->input('name');
    $volEdit->volunteer_email= $request->input('email');
    $volEdit->volunteer_password= $request->input('password');
    $volEdit->volunteer_img=$imgname;
    $volEdit->update();
    return redirect('volunteers');
  }







}
