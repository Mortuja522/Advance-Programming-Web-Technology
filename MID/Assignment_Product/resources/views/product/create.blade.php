@extends('layouts.layout')
@section('content')
        <form action="{{route('create')}}" method="post">
            {{@csrf_field()}}
        <input type="text" name="name" value="{{old('name')}}" placeholder="Product Name">
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="price" value="{{old('price')}}" placeholder="Product Price">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="qty" value="{{old('qty')}}" placeholder="Product Quantity">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="dis" value="{{old('dis')}}" placeholder="Product Description">
        @error('dis')
            <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Create Product">
        </form>
@endsection