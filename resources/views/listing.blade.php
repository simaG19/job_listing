

@extends('layout')

@section('content')
<h2>
    {{$listing['title']}}
    </h2>
    <p>
    {{$listing['description']}}
    </p>
    <p>
        {{$listing['id']}}
        </p>

@endsection