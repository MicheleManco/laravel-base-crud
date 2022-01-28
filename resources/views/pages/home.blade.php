@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ( $comics as $comic)
        <li>
            <a href="">{{$comic -> title}}</a>
        </li>
    @endforeach
</ul>
    
@endsection