{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Categories","titleAdmin"=>"Add Category
"])

@section('content_admin')


<form action="{{route('storeCategory')}}" method="POST"  enctype="multipart/form-data"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
@csrf
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Add Category <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" id="add-category" name="categoryName" required="required" class="form-control ">
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