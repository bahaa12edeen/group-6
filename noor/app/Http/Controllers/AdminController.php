<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;
use App\Models\User;

use App\Models\blog;

class AdminController extends Controller
{
    // Dashboard
    public function viewDashboard(){
        $usersCount = DB::table('users')->count();
        $booksCount = DB::table('books')->count();
        $blogsCount = DB::table('blogs')->count();

        return view('Admin.dashboard',['usersCount'=>$usersCount,'booksCount'=>$booksCount,'blogsCount'=>$blogsCount]);
    }
    // Users
    public function viewUsers(){
        $usersInfo = DB::select('select * from users');
        return view('Admin.users',['usersInfo'=>$usersInfo]);
    }
    public function editUserPage($id){
        $editUser = User::find($id);
        return view('Admin.editUserPage', compact('editUser'));
    }
    public function editUser($id){
        $editUser = User::find($id);
        $editUser-> first_name=request('first_name');
        $editUser-> last_name=request('last_name');
        $editUser-> email=request('email');
        $editUser-> phone_number=request('phone_number');
        $editUser-> city=request('city');
        $editUser-> is_admin=request('role');
        $editUser-> is_organization=request('org');
        $editUser-> save();
        return redirect('AdminUsers')->with('message','User updated succefully');
    }
    // public function deleteUser($id){
    //     $delUser = User::find($id);
    //     $delUser->is_deleted=1;
    //     $delUser->save();
    //     return redirect('AdminUsers')->with('message','User deleted succefully');
    // }

    // // Services
    // public function viewServices(){
    //     $servicesInfo = DB::select('select * from services where is_deleted=0');
    //     return view('Admin.services',['servicesInfo'=>$servicesInfo]);
    // }
    // public function addServicePage(){
    //     return view('Admin.addSer');
    // }
    // public function addService(Request $request){
    //     // $servicesInfo = DB::select('select * from services');
    //     $newService = new Services();

    //     $file= $request->file('service_image');
    //     $filename=$file->getClientOriginalName();
    //     $file-> move(public_path('/images/services/'), $filename);
    //     $image= $filename;

    //     $newService->service_name=request('service_name');
    //     $newService->service_cost=request('service_cost');
    //     $newService->service_description=request('service_description');
    //     $newService->service_image=$image;
    //     $newService->save();
    //     return redirect('AdminServices')->with('message','Service added succefully');
    // }
    // public function editServicePage($id){
    //     $editSer = Services::find($id);
    //     return view('Admin.editSer', compact('editSer'));
    // }
    // public function editService(Request $request, $id){
    //     $editService = Services::find($id);
    //     if($request->file('service_image')){
    //         $file= $request->file('service_image');
    //         $filename=$file->getClientOriginalName();
    //         $file-> move(public_path('admin/Images'), $filename);
    //         $service_image= $filename;
    //     }else{
    //         $service_image= $editService->service_image;
    //     }
    //     $editService-> service_name=request('service_name');
    //     $editService-> service_cost=request('service_cost');
    //     $editService-> service_image=$service_image;
    //     $editService-> save();
    //     return redirect('AdminServices')->with('message','Service updated succefully');
    // }
    // public function deleteService($id){
    //     $delSer = Services::find($id);
    //     $delSer->is_deleted=1;
    //     $delSer->save();
    //     return redirect('AdminServices')->with('message','Service deleted succefully');
    // }
    // // Reservations
    // public function viewReservations(){
    //     $reservationsInfo = DB::select('select * from reservations join users on reservations.user_id = users.id join services on reservations.service_id = services.id');
    //     return view('Admin.reservations',['reservationsInfo'=>$reservationsInfo]);
    // }

    //Login
    public function viewLogin(){
        return view('Admin.login');
    }
    public function Login(){
        $email= request('adminEmail');
        $pass= request('adminPass');
        $users = DB::select('select * from admins');
        foreach ($users as $user) {
            if($user->admin_email == $email){
                if(($user->admin_password == $pass)){
                    return redirect('/AdminDashboard');
                }else{
                    if($users[count($users)-1]->admin_id == $user->admin_id){
                    return redirect('/AdminLogin')->with('message','Email or password is wrong');
                    }else{
                        continue;
                    }
                }
            }else{
                if($users[count($users)-1]->admin_id == $user->admin_id){
                    return redirect('/AdminLogin')->with('message','Email or password is wrong');
                }else{
                    continue;
                }
            }
        }
    }


    public function viewBlogs(){
        $data = DB::select('select * from blogs');
        return view('Admin.AdminBlog',['data'=>$data]);
    }

    public function viewBooks(){
        $data = DB::select('select * from books');
        return view('Admin.AdminBook', ['data'=>$data]);
    }

}