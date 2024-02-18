{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Testimonial","titleAdmin"=>"Edit Testimonial"])

@section('content_admin')

<form  action="{{route('updateTestimonials',$testimonial->id)}}" method="POST"  enctype="multipart/form-data"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
   
    @csrf
    @method('put')
   
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="name" required="required" name="name"  value="{{ $testimonial->name}}" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Position <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="position" name="position"   value="{{ $testimonial->position}}"   "required" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">{{ $testimonial->content}}</textarea>
        </div>
    </div>
    
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
        <div class="checkbox">
            <label>
                <input type="checkbox"  name="published" @checked($testimonial->published) class="flat">
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <img src="{{ asset('upload/'.$testimonial->image) }}" alt="testimonial" style="width:200px;">

            <input type="file" id="image" name="image"  required="required" class="form-control">
            
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