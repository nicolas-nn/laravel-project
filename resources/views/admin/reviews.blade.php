@extends('layouts.app')
@section('reviews')
@foreach ($reviews as $review)
<div class="home1-testm item">
    <div class="home1-testm-single text-center">
        <div class="home1-testm-img">
            <img src="images/beach.jpg" alt="img"/>
        </div><!--/.home1-testm-img-->
        <div class="home1-testm-txt">
            <span class="icon section-icon">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
            </span>
            <p>
                {{ $review->comments }}								</p>
            <h3>
                <a href="#">
                    {{ $review->user }}
                </a>
            </h3>
            <h4>{{ $review->destination }}</h4>
        </div><!--/.home1-testm-txt-->	
    </div><!--/.home1-testm-single-->
    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='reviews/create'">Add</button>

    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='reviews/{{ $review->id }}'">Show</button>
    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='reviews/{{ $review->id }}/edit'">Edit</button>
    <form method="post" action="reviews/{{$review->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-sm btn-outline-secondary" type="submit">Delete</button>

    </form>
</div><!--/.item-->
@endforeach
@endsection