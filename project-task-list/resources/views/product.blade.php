@extends('layouts.app')
@section('title','Product List ---')
@section('content')
    <h1>Product List</h1>
    @foreach($task as $t)
    <div>{{$t->id}} - {{$t->title}} - {{$t->description}} <a href="{{route('product.show',['id'=>$t->id])}}">{{$t->title}}</a></div>
    @endforeach
@endsection
    