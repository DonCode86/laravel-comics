@extends('layouts.base')

@section('page-title')
  comic
@endsection
 
@section('page-content')
  {{-- @include('partials.card') --}}
  <h1>{{$card['title']}}</h1>
@endsection