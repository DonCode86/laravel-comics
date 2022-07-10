<section class="top__main">
  <div class="cards-container container">
    <button class="comics__button">Current Series</button>
      <div class="list">
        @foreach ($comics as $card)
          <div class="card">
            <img class="card-img" src="{{asset($card["thumb"])}}" alt="{{$card["series"]}}">
            <small class="card-text">{{$card["series"]}}</small>
          </div>
        @endforeach
      </div>
    <button class="comics__button">Load More</button>
  </div>
</section>