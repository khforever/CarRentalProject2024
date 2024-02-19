<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Traits\Common;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     use Common;
    public function index()
    {
        $cars=Car::get();
        $categories=Category::get();

        return view ('admin.cars',compact('cars','categories')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
     $categories=Category::get();
     return view('admin.addCar',compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();


        $data=$request->validate([
         'title'=>'required|string|max:50',
         'luggage'=>'required|string',
         'content'=>'required|string',
         'doors'=>'required|string',
         'passengers'=>'required|string',
         'price'=>'required|string',
          'image' => 'required|mimes:png,jpg,jpeg|max:2048',
          'category_id'=>'required',
         
         
        ],$messages);
   
        $fileName = $this->uploadFile($request->image, 'upload');    
        $data['image'] = $fileName;
   
   
         $data['active']=isset($request->active);
         Car::create ($data);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {


      $car = Car::findOrFail($id);
      $categories=Category:: get();
     return view('admin.editCar',compact('car','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
     $messages = $this->messages();


     $data=$request->validate([
        'title'=>'required|string|max:50',
        'luggage'=>'required|string',
        'content'=>'required|string',
        'doors'=>'required|string',
        'passengers'=>'required|string',
        'price'=>'required|string',
         'image' => 'required|mimes:png,jpg,jpeg|max:2048',
         'category_id'=>'required',
        
       ],$messages);
 


     $data['active']=isset($request->active);
   
 if($request->hasFile('image'))
 {
  $fileName = $this->uploadFile($request->image, 'upload');    
  $data['image'] = $fileName;



 }

  

    Car::where ('id',$id)->update($data);
   
return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      Car::where ('id',$id)->delete();
      return redirect()->back();
    }



    public function messages()

    {
    
    
      return [
        'title.required'=>'Please insert the name',
        'luggage.string'=>'Should be string',
        'content.required'=> 'should be text',
        'image.required'=> 'Please be sure to select an image',
                'image.mimes'=> 'Incorrect image type',
                'image.max'=> 'Max file size exceeded',
                'doors.string'=>'Should be string',
                'passengers.string'=>'Should be string',
                'price.string'=>'Should be string',
                'category_id.required'=>'Should be string',
               

    
        ];

    }



}

