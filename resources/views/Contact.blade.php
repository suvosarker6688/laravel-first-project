@extends('app')
@section('title','Contact Page')
@section('main_content')
<h3> {{ $page_name }}</h3>

@forelse  ($products as $key => $product )
    @include('partial.product')
    @empty
    <p>No product found..!</p>
    @endforelse




@endsection
