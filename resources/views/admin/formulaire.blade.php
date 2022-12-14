@extends('layouts.app')
@section('formulaire')

@if( !empty($destination)  )
<form method="POST" action="/destinations/{{ $destination->id }}">
    @method('PUT')
@else
<form method="POST" action="/destinations">
@method('POST')
@endif

    @csrf


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">City</label>
      <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" 
      value="{{ $destination->city ?? old('city')}}">
      @error('city')
      {{$message}}
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">url image</label>
      <input type="text" class="form-control" name="url" id="exampleInputPassword1" 
      value="{{ $destination->url ?? old('url')}}">       
            @error('url')
            {{$message}}
            @enderror
    </div>
    <div class="mb-3">
        <label for="tour" class="form-label">tour</label>
        <input type="number" class="form-control" name="tour" id="tour" aria-describedby="emailHelp" 
        value="{{ $destination->tour ?? old('tour')}}">
        @error('tour')
        {{$message}}
        @enderror
      </div>
      <div class="mb-3">
        <label for="place" class="form-label">place</label>
        <input type="number" class="form-control" name="place" id="place" 
        value="{{ $destination->place ?? old('place') }}">
        @error('place')
        {{$message}}
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection