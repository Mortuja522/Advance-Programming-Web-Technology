@extends('layouts.app')
@section('content')
    <h1>Student Info</h1>
    <h3>Name: {{$st->name}}</h3>
    <h3>Id: {{$st->uid}}</h3>
    <h3>Department:{{$st->department->name}}</h3>
    <h3>Id: {{$st->cgpa}}</h3>
@endsection