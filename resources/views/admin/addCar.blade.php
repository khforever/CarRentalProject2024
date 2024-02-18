@extends('admin.layout.pages',["ManageText"=>"Cars","titleAdmin"=>"Add Car"])

@section('content_admin')



<form  action="{{route('storeCar')}}" method="POST"  enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
  
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="title" required="required" name="title" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">Contents</textarea>
        </div>
    </div>
    <div class="item form-group">
        <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="luggage" class="form-control" type="number" name="luggage" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="doors" class="form-control" type="number" name="doors" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="passengers" class="form-control" type="number" name="passengers" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="price" class="form-control" type="number" name="price" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
                <input type="checkbox"  name="active" class="flat">
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" required="required" class="form-control">
        </div>
    </div>

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="category_id" id="">
                <option value=" ">Select Category</option>




                @foreach($categories as $category)

                <option value="{{$category->id}}">"{{$category->categoryName}}"</option>
        
              @endforeach




            </select>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </div>

</form>



@endsection