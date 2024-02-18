<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CarRentalController extends Controller
{


    public function index(){


//$testimonial=Testimonial::get();
      
        $testimonial=Testimonial::paginate(3);
        $car=Car::where("active","1")->paginate(6);

        return view("CarRental.index",compact('testimonial','car'));
    }

    public function contact(){
        return view('CarRental.contact');
    }






    public function about(){
        return view('CarRental.about');
    }



    public function blog(){
        return view('CarRental.blog');
    }
///////////////////
    public function showCar(string $id)
    {
        $car = Car::findOrFail($id);  
     
    
       $categories=Category::get();


     // $count = Car::where('category_id', $category->id)->count();

      


      return view('CarRental.single',compact('car','categories'));
    }

//////////////////////////




    public function Testimonials(){

        $data=Testimonial::paginate(9);



        return view('CarRental.Testimonials',compact("data"));
    }

   


    public function Listings(){

        $car=Car::where("active","1")->paginate(6);
        //$testimonial=Testimonial::get();

        $testimonial=Testimonial::paginate(3);
        return view('CarRental.Listings',compact('car','testimonial'));
    }



    public function single(){
        return view('CarRental.single');
    }


}
