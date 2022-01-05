@extends('publicSite.layouts.master')
@section('content')
<style>
        #start-quiz{
    background-color:#f99821;
    color: white;font-weight: 500;
     margin-left: 19%;
  }
  #start-quiz:hover{
    background-color: #ff8c00;

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
    #mainText {
    font-family: 'Scheherazade New', serif;
    color: #20325a;
    font-size: 35px;
    margin-bottom: 20px;
  }
  .page-title{
    padding-left: 10.5%
  }
</style>

      <div class="page-title row justify-content-start mb-5 pb-2 ">
<div class="col-md-8  heading-section ftco-animate" >
    <h4 id="mainText" class="mb-2 mt-3">Searched Exams</h4>

    <div class="page_link">
      <a href="{{ route('index') }}">Home</a>
      <a href="{{ route('show_categories') }}">/ Exams</a>
  
    
    </div>
</div>
</div>

<div class="search-container   ">
      <div class="row d-flex justify-content-center " >
        <div class="col-6 d-flex justify-content-center flex-wrap gap-3" >

@if($exam->isNotEmpty())
    @foreach ($exam as $item)
    <div class=" card search-card" style="width:16rem;" >
                <img height="150px" src="{{ asset($item->image) }}" class="card-img-top" alt="company-logo">
                <div class="card-body">
                  <h5 class="card-title"><strong>{{ $item->title }}</strong></h5>
                  <p> This exam need  {{ $item->time_estimation }} minutes to solve it, and it contains {{ $item->number_of_questions }} questions </p>
                  
                  <a  id="start-quiz" href="{{ route('single_exam',$item->id ) }}" class="btn ">Get Started</a>
                </div>
            </div>
    @endforeach
</div>
</div>


@else 
    <div>

        <h2>No Result!</h2>
    </div>
@endif

</div>
</section>
 @endsection