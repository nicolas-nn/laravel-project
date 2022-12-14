@extends('layouts.app')

@section('show')

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $destination->city ?? $review->user }}</h5>
          @if( $review->id )
          <p>Comment : {{ $review->comments }}</p>
          <p>In : {{ $review->destination }}</p>
          @else
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          @endif
        </div>
      </div>
    </div>
  </div>
  @endsection