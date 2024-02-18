{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Categories","titleAdmin"=>"Edit Category"])

@section('content_admin')


<form  action="{{route('updateCategory',$category->id)}}" method="POST"  enctype="multipart/form-data"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

    @csrf
    @method('put')


    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Edit Category <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="add-category"   name="categoryName"  value="{{ $category->categoryName}}" required="required" class="form-control ">
        </div>
    </div>
    
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>

</form>

@endsection