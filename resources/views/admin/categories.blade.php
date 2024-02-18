{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Categories","titleAdmin"=>"List of Categories
"])

@section('content_admin')



@if (session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


@if(session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif




<div class="x_content">
  <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Category Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>


  <tbody>

    @foreach ($category as $category )
      
  
    <tr>
      <td>{{$category->categoryName}}</td>
      <td><a  href="editCategory/{{ $category->id }}"> <img src="./images/edit.png"  alt="Edit"> </img> </td>
      <td><a  href="destroyCategory/{{ $category->id }}"><img src="./images/delete.png" alt="Delete"> </img> </td>
    </tr>
  
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>


@endsection