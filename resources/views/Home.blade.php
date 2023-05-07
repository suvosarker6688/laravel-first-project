@extends('app')
@section('title','Home Page')
@section('main_content')
<h3>{{ $page_name }}</h3>



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Joined Date</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($users as $user )
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach


    </tbody>
  </table>

@endsection
