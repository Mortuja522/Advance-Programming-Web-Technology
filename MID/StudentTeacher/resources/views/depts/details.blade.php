@extends('layouts.app')
@section('content')
    <div>
        <h2 class="label label-secondary">{{$d->name}}</h2>
    </div>
    @if(count($d->students)>0)
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Dept</th>
                <th>Cgpa</th>
            </tr>
            @foreach($d->students as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->uid}}</td>
                <td>{{$s->dept_id}}</td>
                <td>{{$s->cgpa}}</td>
            </tr>
            @endforeach
        </table>
    @else
        <span class="label label-info">No Student found </span>
    @endif

    @if(count($d->courses)>0)
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($d->courses as $dept)
            <tr>
                <td>{{$dept->name}}</td>
                <td>{{$dept->id}}</td>
               
            </tr>
            @endforeach
        </table>
    @else
        <span class="label label-info">No Course found </span>
    @endif
@endsection