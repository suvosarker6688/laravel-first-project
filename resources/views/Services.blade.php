@extends('app')
@section('title','Services Page')
@section('main_content')
    <h1>This is Services Page</h1>;
 @for ($index=0;$index<count($services);$index++)
 <h2>{{ $services[$index] }}</h2> <br>
 @endfor

@endsection
