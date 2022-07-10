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
      <div class="container">
        <div class="comic-row">
          <div class="comic-col__sx">
              <h1 class="comic-col__title">{{$comic["title"]}}</h1>
              <div class="comic-col__shop">
                  <div class="comic-col__shop-sx">
                      <span>U.S. Price: <span class="comic-col__shop-price">{{$comic["price"]}}</span></span>
                      <span class="comic-col__shop-available">Available</span>
                  </div>
                  <div class="comic-col__shop-dx">
                      <span>Check Availability <i class="fa-solid fa-caret-down"></i></span>
                  </div>
              </div>
              <p class="comic-col__description">{{$comic["description"]}}</p>
          </div>
          <div class="comic-col__dx">
              <span class="comic-col__dx-adv">Advertisement</span>
              <img src="{{asset('img/adv.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
