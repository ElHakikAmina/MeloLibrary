@extends('layouts.app')



<div class="container my-5 ">
  <div class="row justify-content-center ">
    <div class="col-lg-8">
      <div class="card shadow-sm bg-black text-white">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="card-title">{{ $music->title }}</h3>
              <p class="card-text">L'rtiste: {{ $music->artiste }}</p>
              <p class="card-text">L'écrivain: {{ $music->ecrivain }}</p>
              <p class="card-text">La langue: {{ $music->langue }}</p>
              <p class="card-text">Durée: {{ $music->durée }}</p>
              <p class="card-text badge bg-success">Date de sortie: {{ $music->date_sortie }}</p>
            </div>
            <div class="col-lg-6">
              <img class="card-img-top" src="/images/music/{{ $music->image }}" style="width: 100%; height: auto;" alt="{{ $music->title }}">
              <audio controls class="mb-3 mt-3" style="width: 100%">
                <source src="/images/audio/{{ $music->audio }}" type="audio/mpeg">
              </audio>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center my-5">
    <div class="col-lg-8">
      <h3 class="mb-3 text-white">Les commentaires</h3>
      @foreach($comments as $comment)
      
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h5 class="card-title">Commenté par: <span style="color: blue;"> {{ $comment->user->name }} </span> </h5>
          <p class="card-text">{{ $comment->body }}</p>
        </div>
      </div>
      
      @endforeach

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      <div class="card shadow-sm mb-3 ">
        <div class="card-body bg-black text-white">
          <h5 class="card-title">Ajouter un commentaire: </h5>
          <form method="POST" action="{{ route('comments.store', ['music' => $music->id]) }}">
            @csrf
            <input type="hidden" name="music_id" value="{{ $music->id }}" />
            <input type="hidden" name="user_id" value="{{ Auth::id() }}" />


            <div class="form-group">
              <label for="comment-textarea">Votre commentaire:</label>
              <textarea class="form-control bg-black text-white" id="comment-textarea" name="body" rows="4" placeholder="Ecrire votre commentaire ..."></textarea>
            </div>


            <div class="form-group">
              <label for="rating">Your rating:</label>
              <div class="rating" style="color: gold;">
                <input type="radio" name="rating" value="1" id="star-5" />
                <label for="star-5" title="5 stars">
                  <i class="active fa fa-star"></i>
                </label>
                <input type="radio" name="rating" value="4" id="star-4" />
                <label for="star-4" title="4 stars">
                  <i class="active fa fa-star"></i>
                </label>
                <input type="radio" name="rating" value="3" id="star-3" />
                <label for="star-3" title="3 stars">
                  <i class="active fa fa-star"></i>
                </label>
                <input type="radio" name="rating" value="2" id="star-2" />
                <label for="star-2" title="2 stars">
                  <i class="active fa fa-star"></i>
                </label>
                <input type="radio" name="rating" value="5" id="star-1" />
                <label for="star-1" title="1 star">
                  <i class="active fa fa-star"></i>
                </label>
              </div>
            </div>







            <button type="submit" class="btn btn-primary mt-3">Commenter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>