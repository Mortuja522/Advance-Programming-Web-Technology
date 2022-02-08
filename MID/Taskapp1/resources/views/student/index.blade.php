@extends('layouts.app')
@section('content')
<h1>Course Informations || Student View</h1>
<table>
    <tr>
        <td>
            Course name: {{$courses->Course}}
        </td>
    </tr>
    <tr>
        <td>
            Instructor name: {{$courses->Instructor}}
        </td>
    </tr>
    <tr>
        <td>
            Duration: {{$courses->Duration}}
        </td>
    </tr>
    <tr>
        <td>
            Starts: {{$courses->Starts}}
        </td>
    </tr>
</table>
    
@endsection