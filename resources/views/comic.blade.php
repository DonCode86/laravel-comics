@extends('layouts.base')

@section('page-title')
  comic
@endsection
 
@section('page-content')
  <main>
    <section class="comic">
      <div class="comic__cover">
        <div class="container">
          <div class="comic__cover-container">
            <img class="comic__cover-img" src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
            <div class="comic__cover-text">
              <small>{{$comic["type"]}}</small>
            </div>
            <div class="comic__cover-bottom-text">
              <small>VIEW GALLERY</small>
            </div>
          </div>
        </div>
      </div>
      <div class="flex">
        <div>
          <div>
            <h2>{{$comic['title']}}</h2> 
          </div>   
          <div>
            <div>
              <span>US. Price <span>{{$comic['price']}}</span></span>
            </div>   
            <div>
              <span>Chech Avialibility</span>
            </div>
          </div>
          <p>
            {{$comic['description']}}
          </p>
        </div>
        <div>
          <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
      </div>   
    </section>
  </main>
@endsection
