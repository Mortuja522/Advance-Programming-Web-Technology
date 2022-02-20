@extends('layouts.layout')
@section('content')
    <form action="{{route('login')}}" method="post">
        {{@csrf_field()}}

        <input type="text" name="phone" value="{{old('phone')}}" placeholder="Enter Your Phone Number">
        @error('phone')
            <span>{{$message}}</span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="Enter Your Password">
        @error('password')
            <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Login">
    </form>
@endsection
