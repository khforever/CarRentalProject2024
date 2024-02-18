{{-- @extends('admin.layout.pages') --}}


@extends('admin.layout.pages',["ManageText"=>"Users","titleAdmin"=>"Add User"])

@section('content_admin')



{{-- 
{{route('register')}}

{{route('login')}} --}}


<h1>
<td><a  href="{{route('login')}}"> <img src="./images/edit.png"  alt="Edit"> Login </img> </td>
<br>
<br><br><br><br>
	<td><a  href="{{route('register')}}"> <img src="./images/edit.png"  alt="Edit"> Register </img> </td>

</h1>

@endsection