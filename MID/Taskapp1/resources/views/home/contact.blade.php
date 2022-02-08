@extends('layouts.app')
@section('content')
<h1>Contact US</h1>
<ul>
    <table border="1"> 
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
        </tr>  
        @foreach($contact as $c)
           
            <tr>
                   <td>{{$c->Name}}</td>
                   <td>{{$c->Position}}</td>
                   <td>{{$c->Email}}</td>
                   
               </tr>
           
        @endforeach
    </table>
    </ul>
    
@endsection