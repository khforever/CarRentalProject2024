{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Testimonials","titleAdmin"=>"List of Testimonials
"])

@section('content_admin')

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Published</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($testimonials as $data )
      
  
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->position}}</td>
      <td>
        @if ($data->published==1)
       yes
    @else
    
        no
   
    @endif
    </td>
      <td><a  href="editTestimonials/{{ $data->id }}"> <img src="./images/edit.png"  alt="Edit"> </img> </td>
      <td><a  href="destroyTestimonials/{{ $data->id }}"><img src="./images/delete.png" alt="Delete"> </img> </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection