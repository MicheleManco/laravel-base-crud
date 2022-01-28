@extends('layouts.main-layout')
@section('content')

<h1>{{$comic -> title}}</h1>
<p>{{$comic -> author}} - release:{{$comic -> release}} <br><br>
    Pages:{{$comic -> pages}}
</p>
    
@endsection