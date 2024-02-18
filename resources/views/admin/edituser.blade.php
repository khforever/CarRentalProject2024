{{-- @extends('admin.layout.pages') --}}




@extends('admin.layout.pages',["ManageText"=>"Users","titleAdmin"=>"Edit User"])

@section('content_admin')
<form   action="{{route('updateUser',$user->id)}}" method="POST"    id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



@csrf    
{{-- @method('put') --}}

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="first-name" required="required" name="name"   value="{{ $user->name}}" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user-name">Username <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="user-name" name="username"  value="{{ $user->username}}" required="required" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="email" class="form-control" type="email" name="email" value="{{ $user->email}}"  required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
                <input type="checkbox"  @checked($user->active)  class="flat">
            </label>
        </div>
    </div>


    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="password" id="password" name="password" value="{{ $user->password}}" required="required" class="form-control">
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