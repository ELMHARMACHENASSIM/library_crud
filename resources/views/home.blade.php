@extends('layouts.index')
@section('content')
    <style>
        .carousel {
            widows: 100%;
            height: 60vh
        }

        .carousel-inner {
            width: 100%;
            height: 100%
        }

        .carousel-item {
            width: 100%;
            height: 100%
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;

        }
        .card img{
width: 100%;
height: 150px;
object-fit: cover;
object-position: center;
        }
    </style>


  {{--   <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            @for ($i = 0; $i < count($books); $i++)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$books[$i]->id}}" class="active"
                aria-current="true" aria-label="Slide {{$i}}"></button>
                @endfor
        </div>
        <div class="carousel-inner">
            @for ($i = 0; $i < count($books); $i++)
                <div class="carousel-item {{ $i === 0 ? ' active' : '' }} " data-bs-interval="3000">
                    <img src={{ asset('images/' . $books[$i]->imageurl) }} alt={{ $books[$i]->imageurl }}
                        class="d-block w-100 object-fit-cover">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{$books[$i]->id}}</h1>
                        <h5>{{ $books[$i]->titre }}</h5>
                        <p>{{ $books[$i]->auteur }}</p>
                    </div>
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}





    <div class="d-flex flex-wrap justify-content-center mt-5 gap-3">
        @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $book->imageurl) }}" alt="{{ $book->imageurl }}"
                    class="card-img-top object-fit-cover">
                <div class="card-body">
                    <h2 class="card-title">{{ $book->titre }}</h2>
                    <h5 class="card-title">{{ $book->auteur }}</h5>
                    <p class="card-text">{{ $book->resume }}</p>
                    <p>stock :{{ $book->stock }}</p>
                    <a href="{{ asset('images/' . $book->imageurl) }}" download="{{ $book->imageurl}}" class="btn btn-primary">download image</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
