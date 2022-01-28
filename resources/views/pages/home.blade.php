@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ( $comics as $comic)
        <li>
            <a href="{{ route('show', $comic -> id )}}">{{$comic -> title}}</a>
        </li>
    @endforeach
</ul>
    
@endsection