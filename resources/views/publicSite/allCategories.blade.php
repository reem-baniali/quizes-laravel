@extends('publicSite.layouts.master')
@section('content')
<style>
  #categories_container{
   background-color: #fef4e8;
   width: 100%
  }
  #mainText {
    font-family: 'Scheherazade New', serif;
    color: #20325a;
    font-size: 35px;
    margin-bottom: 20px;
  }
  #subText{
    font-family: 'Scheherazade New', serif;
    color: #20325a;
    font-size: 22px;
    margin-bottom: 20px;
  }
   .page_link>a{
     text-decoration: none;
     color:#20325a;
    font-size: 15px;
   }
   .page_link>a:hover {

    font-weight: 700;
    color: #ff8c00;

  }

</style>
<section class="ftco-section  ">
 
  <div class="container"  id="categories_container" >
    {{-- title dive --}}
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8  heading-section ftco-animate">
        <h3 id="mainText" class="mb-2 mt-5"><span>All</span> Categories</h3>
        {{--<p>Separated they live in. A small river named Duden flows by their place
          and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
        <div class="page_link">
          <a href="{{ route('index') }}">Home</a>
          <a href="{{ route('show_categories') }}">/ categories</a>
        </div>
      </div>

    </div>
    <div class="row">

      {{-- start aside div - top categories --}}
      <div class="col-lg-2" style="border-right: solid .5px rgb(194, 194, 194)">
        <div class="left_sidebar_area">
          <aside class="left_widgets p_filter_widgets">
            <div>
              <h5 id ="subText" class=""><strong>Top Categories</strong></h5>
            </div>
            <div class="widgets_inner">
              <ul class="list">
                @foreach ($categories as $category)
                <li class="category-title page_link" style="font-size:18px">
                  <a href="{{ route('single_category',$category->id )}}">
                    {{ $category->name }}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </aside>
        </div>
      </div>
      {{-- End aside div --}}

      {{-- main content --}}
      <div class="col-10 d-flex justify-content-center flex-wrap gap-5 m-auto">
        @foreach ($exams as $exam)
        <div class="col-md-4 col-sm-8 mb-2 " style="max-width: fit-content; overflow:hidden">
          <div class="card" style="width: 18rem; ">
            <img height="250px" src="{{$exam->image }}" class="card-img-top" alt="exam-image">
            <div class="card-body">
              <h5 class="card-title">{{ $exam->title }}</h5>
              <p class="card-text text-truncate">{{ $exam->time_estimation }}</p>
              <p class="card-text text-truncate">{{ $exam->number_of_questions }}</p>
              <a href="{{ route('single_category', $exam->id ) }}" class="btn btn-primary">Get Started</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- end main content --}}
    {{-- pagination part --}}
    <div style="justify-content: center; 
    margin-left:50%;margin-top:5%;margin-bottom:5%">
      {!! $exams->links() !!}
    </div>
    {{-- end pagination part --}}
  </div>
  </div>

</section>


@endsection