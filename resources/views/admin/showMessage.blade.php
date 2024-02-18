{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Messages","titleAdmin"=>""])

@section('content_admin')

<div class="x_panel">

  {{-- {{ $data['email']}} --}}
  <h2>Full Name:   {{ $contact['fname']}}  {{ $contact['lname']}}</h2>
  <br>
  <h2>Email:  {{ $contact['email']}}</h2>
   <br>
  <h2>Message Content:</h2>
  <p> {{ $contact['content']}}
    
    
    </p>
</div>


@endsection