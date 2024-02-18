<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $category=Category::get();
        return view('admin.categories',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $category=Category::get();
        return view('admin.addCategory',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
     $messages = $this->messages();


     $data=$request->validate([
      'categoryName'=>'required|string',
    
      
     ],$messages);

   


      Category::create ($data);
   
  return redirect()->back();
   
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
      
        // $category = Category::findOrFail($id); 
        // $car = Car::findOrFail($id);
  
  
  
        // $count = Car::where('category_id', $category->id)->count();
  
        
  
  
        // return view('admin.categories',compact('car','category','count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $category=Category::findOrFail($id);
        return view('admin.editCategory',compact('category')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
     $messages = $this->messages();


     $data=$request->validate([
      'categoryName'=>'required|string',
     
      
     ],$messages);

  

    Category::where ('id',$id)->update($data);
   

return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        Category::where ('id',$id) ->delete();
    
        return redirect()->back();




    }





    public function deleteCategory($category_id)
    {
        // Check if there are any related records in the cars table
        $carsCount = Car::where('category_id', $category_id)->count();
    
        if ($carsCount > 0) {
            // If there are related records, return an error message or handle as needed
            //return redirect()->back()->with('error', 'Cannot delete category because it has associated cars.');



            
        return redirect('categories')->with('warning', 'Can not delete Data because this category conain car type');
        }
    
        // If there are no related records, proceed with deleting the category
        $category = Category::find($category_id);
    
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }
        $category->delete();

       // return redirect()->back()->with('success', 'Category deleted successfully.');
        return redirect('categories')->with('success', 'Category deleted successfully.');


    }    
















    public function messages()

    {
    
    
      return [
        'categoryName.required'=>'Please insert the name',
          
    
        ];
    }
    








}
