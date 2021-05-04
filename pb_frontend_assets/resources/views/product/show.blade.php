@extends('layouts.app')
@section('content')
    <h1>Dog</h1>
    <img width="400" src="{{$product['imageUrl'] }}">
@endsection

@section('inline_js')
    @parent
@endsection