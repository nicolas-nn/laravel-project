@extends('layouts.app')
@section('destinations')

<div style="display:flex;">
  <h1>Gestion des destinations</h1>
<button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='destinations/create'">Add</button>
</div>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ( $destinations as $destination)
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top"src="{{asset('images/beach.jpg')}}" alt="">
            <div class="card-body">
              <h4><a href="#">
                {{ $destination->city }}
            </a></h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='destinations/{{ $destination->id }}'">Show</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='destinations/{{ $destination->id }}/edit'">Edit</button>
                               
                  <form method="post" action="destinations/{{$destination->id}}">
                
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                
                    <button class="btn btn-sm btn-outline-secondary" type="submit">Delete</button>
                  </form>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection