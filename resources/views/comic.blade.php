@extends('layouts.base')

@section('page-title')
  comic
@endsection
 
@section('page-content')
  {{-- @include('partials.card') --}}
  <h1>{{$comic['title']}}</h1>
@endsection