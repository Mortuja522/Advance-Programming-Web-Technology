@extends('layouts.layout')
@section('content')
        <form action="{{route('edit',$data->id)}}" method="post">
            {{@csrf_field()}}
        
        <input type="hidden" name="id" value="{{$data->id}}">

        <input type="text" name="name" value="{{$data->name}}" placeholder="Product Name">
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="price" value="{{$data->price}}" placeholder="Product Price">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="qty" value="{{$data->qty}}" placeholder="Product Quantity">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="dis" value="{{$data->dis}}" placeholder="Product Description">
        @error('dis')
            <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Edit Product">
        </form>
@endsection
