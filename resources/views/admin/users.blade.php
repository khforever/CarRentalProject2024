{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Users","titleAdmin"=>"List of Users
"])

@section('content_admin')

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Registration Date</th>
      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Active</th>
      <th>Edit</th>
    </tr>
  </thead>


  <tbody>

    
    @foreach ($users as $user )
   
    <tr>

      

      <td>{{$user->created_at}}</td>
     
      <td>{{$user->name}}</td>
      <td>{{$user->username}}</td>

      <td>{{$user->email}}</td>

      <td>{{$user->active}}</td>

      <td><a  href="edituser/{{ $user->id }}"> <img src="./images/edit.png"  alt="Edit"> </img> </td>
  
    </tr>

         
    @endforeach
  </tbody>
</table>


@endsection