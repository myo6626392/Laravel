@extends('layout.app')
@section('title',"Home Page")
@section('content')
    <h1>Home Page</h1>
    <p>my name is {{ $bobo['name'] }} and live in {{ $bobo['address'] }} and email is {{ $bobo['email'] }} </p>

    <h3>
        User Lists
    </h3>
    <ul>
        @foreach ($users as $user)
        <li>{{$user}}</li>


        @endforeach

    </ul>
    <ul>
        @foreach ($lists as $list)
        <li>{{ $list['name'] }} {{ $list['age'] }}</li>
        @endforeach
    </ul>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus aliquid tenetur, tempore dolores placeat qui? Incidunt nobis maxime hic, aspernatur perspiciatis, est ipsam perferendis voluptate dolores aperiam quia, quod architecto!</p>

@endsection
