<section class="top__main">
  <div class="cards-container container">
    <button class="comics__button">Current Series</button>
      <div class="list">
        @foreach ($comics as $index => $comic)
          <div class="card">
            <a href="{{route('comic',['id'=> $index])}}">
            <img class="card-img" src="{{asset($comic["thumb"])}}" alt="{{$comic["series"]}}">
            <small class="card-text">{{$comic["series"]}}</small>
          </div>
        @endforeach
      </div>
    <button class="comics__button">Load More</button>
  </div>
</section>