{{-- @extends('admin.layout.pages') --}}




@extends('admin.layout.pages',["ManageText"=>"Cars","titleAdmin"=>"List of Cars
"])

@section('content_admin')

<div class="card-box table-responsive">
  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Active</th>
        <th>Category</th>
        <th>Category Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    

    <tbody>
      @foreach($cars as $car)
      <tr>
        <td>{{$car->title}}</td>
        <td>{{$car->price}}</td>
        <td>{{$car->active}}</td>
        <td>{{$car->category_id}}</td>
        <td>{{$car->category->categoryName}}</td>
        <td><a  href="editCar/{{ $car->id }}"> <img src="./images/edit.png"  alt="Edit"> </img> </td>
        <td><a  href="destroyCar/{{ $car->id }}"><img src="./images/delete.png" alt="Delete"> </img> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection