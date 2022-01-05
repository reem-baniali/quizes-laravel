
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
  #start-exam{
    background-color:#f99821;
    color: white;font-weight: 500;
    margin-left: 19%;
  }
  #start-exam:hover{
    background-color: #ff8c00;
  }
  .page-title{
    padding-left: 10.5%
  }
</style>
    <div class="page-title row justify-content-start mb-5 pb-2 ">
      <div class="col-md-8  heading-section ftco-animate  ">
        <h4 id="mainText" class="mb-2  mt-3"><strong>All</strong> Exams</h4>
        <div class="page_link">
          <a href="{{ route('index') }}">Home</a>
          <a href="{{ route('show_categories') }}">/ Exams</a>
        </div>
      </div>

    </div>
 
  <div class="container"  id="categories_container" >
    {{-- title dive --}}

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
                <li class="category-title page_link" style="font-size:18px"><a href="{{ route('show_categories') }}"> All Exams </a></li>
                @foreach ($categories as $category)
                <li class="category-title page_link" style="font-size:18px">
                  <a href="{{ route('single_category',$category->id )}}">
                    {{ $category->name }} </a>
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
        <div class="col-md-3 col-sm-8 mb-2 " style="max-width: fit-content; overflow:hidden">
          <div class="card" style="width: 16rem; ">
            <img height="150px" src="{{asset($exam->image )}}" class="card-img-top" alt="exam-image">
            <div class="card-body">
              <h5 class="card-title">{{ $exam->title }}</h5>
             <p> This exam need  {{ $exam->time_estimation }} minutes to solve it, and it contains {{ $exam->number_of_questions }} questions </p>

              <a href="{{ route('single_exam', $exam->id ) }}" id="start-exam" class="btn ">Get Started</a>
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



@endsection