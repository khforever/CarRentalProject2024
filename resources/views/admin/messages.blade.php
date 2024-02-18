{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Messages","titleAdmin"=>"List of Messages
"])

@section('content_admin')

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Email</th>
      <th>Show</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact )
      
 
    <tr>
      <td>{{ $contact['fname']}} . {{ $contact['lname']}}</td>
      <td>{{ $contact['email']}} </td>
      <td><a  href="showMessage/{{ $contact->id }}"> <img src="./images/edit.png"  alt="Show"> </img> </td>

        <td><a  href="deleteMessage/{{ $contact->id }}"> <img src="./images/delete.png"  alt="Delete"> </img> </td>

     
    </tr>
 
    @endforeach
  </tbody>
</table>


@endsection