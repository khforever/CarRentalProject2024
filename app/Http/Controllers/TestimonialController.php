<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     use Common;
    public function index()
    {
       // return view('admin.addTestimonials');


       $testimonials=Testimonial::get();
       return view('admin.testimonials',compact('testimonials'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $testimonials=Testimonial::get();
       return view('admin.addTestimonials',compact('testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
     $messages = $this->messages();


     $data=$request->validate([
      'name'=>'required|string',
      'content'=>'required|string',
       'image' => 'required|mimes:png,jpg,jpeg|max:2048',
       'position'=>'required',
      
     ],$messages);
//assets/images

//  upload is folder to push the images 
     $fileName = $this->uploadFile($request->image, 'upload');    
     $data['image'] = $fileName;


      $data['published']=isset($request->published);
      Testimonial::create ($data);
    //  return view('admin.testimonials');
  return redirect()->back();
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $testimonial=Testimonial::findOrFail($id);
        return view('admin.editTestimonials',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
     $messages = $this->messages();


     $data=$request->validate([
      'name'=>'required|string',
      'content'=>'required|string',
       'image' => 'required|mimes:png,jpg,jpeg|max:2048',
       'position'=>'required',
      
     ],$messages);





     $data['published']=isset($request->published);
   
 if($request->hasFile('image'))
 {
  $fileName = $this->uploadFile($request->image, 'upload');    
  $data['image'] = $fileName;



 }

  

    Testimonial::where ('id',$id)->update($data);
   // return 'updated';
    // return redirect('');

//return view('admin.testimonials');

return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
           
      Testimonial::where ('id',$id) ->delete();
    
       return redirect()->back();
    }


    public function messages()

    {
    
    
      return [
        'name.required'=>'Please insert the name',
        'position.string'=>'Should be string',
        'content.required'=> 'should be text',
        'image.required'=> 'Please be sure to select an image',
                'image.mimes'=> 'Incorrect image type',
                'image.max'=> 'Max file size exceeded',
                
    
        ];
    }
    










}
