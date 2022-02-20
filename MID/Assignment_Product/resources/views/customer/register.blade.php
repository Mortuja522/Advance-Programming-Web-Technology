<html>
    <form action="{{route('register')}}" method="post">
        {{@csrf_field()}}
    
    <input type="text" name="name" value="{{old('name')}}" placeholder="Enter Name">
    @error('name')
        <span>{{$message}}</span>
    @enderror
    <br>

    <input type="text" name="phone" value="{{old('phone')}}" placeholder="Enter Phone Number">
    @error('phone')
        <span>{{$message}}</span>
    @enderror
    <br>

    <input type="password" name="password" placeholder="Password">
    @error('password')
        <span>{{$message}}</span>
    @enderror
    <br>
    <input type="password" name="con_pass" placeholder="Confirm Password">
    @error('con_pass')
        <span>{{$message}}</span>
    @enderror
    <br>
    
    <input type="submit" value="Register">