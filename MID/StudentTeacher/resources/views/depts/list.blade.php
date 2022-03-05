@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Id</th>
        </tr>
        @foreach($depts as $d)
            <tr>
                <td><a href="{{route('details',['id'=>$d->id])}}">{{$d->name}}</a></td>
                <td>{{$d->id}}</td>
            </tr>
        @endforeach
    </table>
@endsection