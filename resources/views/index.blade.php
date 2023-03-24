@extends('layouts.app')


<section class="mb-4">

    <div class="container text-center">
        <form id="search-form" action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" id="search" class="form-control text-white bg-black" placeholder="Search" name="search" />
                </div>
                <button type="submit" class="btn btn-info" style="height: 38px;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="container bg-black">
        <div class="row">

            <div class="col-md-8">
            @foreach ($musicx as $mu)

                <div class="card mb-4 bg-black text-white" style="height:200px;">
                    <div class="card-body" style="width: auto;">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('music.show', $mu->id) }}">
                                    <img class="img-fluid rounded" style="width:120px;height:120px;" src="/images/music/{{ $mu->image }}" alt="..." />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h3 class="card-title">{{ $mu->title }}</h3>
                                <p class="card-text"><small class="text-muted">{{ date("M j, Y", strtotime($mu->created_at)); }} | </small> {{ ($mu->durée) }}  </p>
                                <audio controls style="width:100%; height:30px;">
                                    <source src="/images/audio/{{ $mu->audio }}" type="audio/mpeg">
                                </audio>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="stars">
                                        <div class="card-text">
                                            @if($mu->comments->count() > 0)
                                            @php $avgRating = $mu->comments->avg('rating'); @endphp
                                            @for($i = 1; $i <= 5; $i++) @if($i <=$avgRating) <i class="fa fa-star" style="color:gold"></i>
                                                @else
                                                <i class="fa fa-star"></i>
                                                @endif
                                                @endfor
                                                <span style="color: gray;">Rating ({{ $avgRating }}/5)</span>
                                                @else
                                                <span style="color: gray;">Aucun rating pour cette musique</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="items_dy">
                                        <i class="fa-regular fa-share-from-square"></i><span style="color: gray;">Share(04)</span>
                                    </div>
                                </div>

                                <style>
                                    .stars i {
                                        color: gray;
                                        transition: color 0.2s;
                                        cursor: pointer;
                                    }

                                    .stars i:hover,
                                    .stars i.active {
                                        color: red;
                                        /* background-color: red; */
                                    }
                                </style>

                               

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>

            <!-- Pagination -->

            <!-- Pagination -->
            @if ($musicx instanceof Illuminate\Pagination\LengthAwarePaginator)
            {{ $musicx->links() }}
            @endif

            <div class="col-md-4">
                <div class="card my-4">
                    <h5 class="card-header text-center bg-black text-white">Trouver votre genre musical</h5>
                    <div class="card-body bg-black">
                        <div class="row ">
                            <div class="col-lg-12 bg-black">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>