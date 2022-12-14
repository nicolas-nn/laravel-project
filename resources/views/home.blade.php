@extends('layouts.site')

@section('destinationOptions')
    @foreach ($destinations as $destination)
        <option value="{{ $destination->city }}">{{ $destination->city }}</option><!-- /.option-->
    @endforeach
@endsection

@section('destinationCards')
@foreach ($destinations as $destination)
<div class="col-md-6">
    <div class="filtr-item">
      <img src="images/beach.jpg" alt="portfolio image"/>
      <div class="item-title">
          <a href="#">
              {{ $destination->city }}
          </a>
      <p><span>{{ $destination->tour }}tours</span><span>{{ $destination->place }} places</span></p>
      </div><!-- /.item-title -->
  </div><!-- /.filtr-item -->
</div><!-- /.col -->
@endforeach
@endsection
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

</div><!--/.item-->
@endforeach
@endsection

@section('packages')
@foreach ($packages as $package)


<div class="col-md-4 col-sm-6">
    <div class="single-package-item">
        <img src="images/beach.jpg" alt="package-place">
        <div class="single-package-item-txt">
            <h3>{{ $package->title }} <span class="pull-right">${{ $package->price }}</span></h3>
            <div class="packages-para">
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i> 3 Days 2 nights
                    </span>
                    <i class="fa fa-angle-right"></i>  5 star accomodation
                </p>
                <p>
                    <span>
                        <i class="fa fa-angle-right"></i>  transportation
                    </span>
                    <i class="fa fa-angle-right"></i> food facilities
                 </p>
            </div><!--/.packages-para-->
            <div class="packages-review">
                <p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>{{ $package->reviews }} reviews</span>
                </p>
            </div><!--/.packages-review-->
            <div class="about-btn">
                <button  class="about-view packages-btn">
                    book now
                </button>
            </div><!--/.about-btn-->
        </div><!--/.single-package-item-txt-->
    </div><!--/.single-package-item-->

</div><!--/.col-->

@endforeach
@endsection