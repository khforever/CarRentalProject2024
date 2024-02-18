<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   


    public function userSession(Request $request)
    {

      //  session()->put()


      
        // Retrieve username from session
        $username = $request->session()->get('username');

        // Return view with username
        return view('your-view')->with('username', $username);
        
    }


    public function showUser()
    {
     $users=User::get();
     return view('admin.users',compact('users'));
     
        
    }


    public function edituser($id)
    {
       
        $user=User::findOrFail($id);
        return view('admin.edituser',compact('user')); 
    }



    public function updateUser(Request $request, $id)
    {
     $messages = $this->messages1();
     $data=$request->validate([
        'name'=>'required|string|max:50',
        'username'=>'required|string',
        'email'=>'required|string',
        'password'=>'required|string',
       ],$messages);

     $data['active']=isset($request->active);

    User::where ('id',$id)->update($data);
   
return redirect()->back();

    }

    public function messages1()

    {
      return [
        'name.required'=>'Please insert the name',
        'username.string'=>'Should be string',
        'email.required'=> 'should be text',
      
        'password.string'=>'Should be string',
    
        ];
    }















    public function addCategory(){
        return view('admin.addCategory');
    }


    public function addCar(){
        return view('admin.addCar');
    }


    public function pages(){
        return view('admin.layout.pages');
    }


    


    public function addTestimonials(){
        return view('admin.addTestimonials');
    }

    


    public function addUser(){
        return view('admin.addUser');
    }
    


    public function users(){
        return view('admin.users');
    }


    



    public function testimonials(){
        return view('admin.testimonials');
    }



    


    public function cars(){
        return view('admin.cars');
    }

    


    public function categories(){
        return view('admin.categories');
    }

    

    public function editCar(){
        return view('admin.editCar');
    }

    

    public function editCategory(){
        return view('admin.editCategory');
    }


    


    public function editTestimonials(){
        return view('admin.editTestimonials');
    }

    


    // public function edituser(){
    //     return view('admin.edituser');
    // }

    



    public function messages(){
        return view('admin.messages');
    }

    


    public function showMessage(){
        return view('admin.showMessage');
    }






    


    public function loginPage(){
        return view('admin.loginPage');
    }





}
