@extends('layouts.app')
@section('content')
<form action="{{route('create')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="Id">
        @error('id')
        <span>{{$message}}</span>
        @enderror
        <br>
        {{-- <input type="text" name="dept" value="{{old('dept')}}" placeholder="Department"> --}}
        <select name="dept">
            <option selected disabled>Select Department</option>
            <option value="1">CSE</option>
            <option value="2">EEE</option>
            <option value="3">BBA</option>
            <option value="4">IPE</option>
            <option value="5">Arch</option>
        </select>
        @error('dept')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="cgpa"  placeholder="CGPA"><br>
        @error('cgpa')
        <span>{{$message}}</span>
        @enderror
        
        <input type="submit" value="Create">
    </form>
@endsection
