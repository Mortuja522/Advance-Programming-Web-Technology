@section('content')
<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    @foreach ($data as $p)
    <tr>
       <td>{{$p->id}}</td>
       <td>{{$p->name}}</td>
       <td>{{$p->price}}</td>
       <td>{{$p->qty}}</td>
    </tr>
        
    @endforeach
</table>
@endsection