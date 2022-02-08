@extends('layouts.app')
@section('content')
<h3>Course Information || Home</h3>
<ul>
<table border="1"> 
    <tr>
        <th>Couse Name</th>
        <th>Instructor Name</th>
        <th>Duration</th>
        <th>Starts</th>
    </tr>  
    @foreach($course as $c)
       
        <tr>
               <td>{{$c->Course}}</td>
               <td>{{$c->Instructor}}</td>
               <td>{{$c->Duration}}</td>
               <td>{{$c->Starts}}</td>
           </tr>
       
    @endforeach
</table>
</ul>
    
@endsection