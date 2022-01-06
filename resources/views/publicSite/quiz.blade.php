@extends('publicSite.layouts.master')
@section('content')
<style>
  #categories_container{
   background-color: #fef4e8;
   width: 100%;
  
  }
  #mainText,#mainText2 {
    font-family: 'Scheherazade New', serif;
    color: #20325a;
    font-size: 30px;
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
   #submit-exam,#submit-qustion{
    background-color:#f99821;
    color: white;font-weight: 500;
  }
  #submit-qustion,#submit-exam:hover{
    background-color: #ff8c00;
  }
   .page-title{
    padding-left: 22%
  }

</style>
 <div class="page-title row justify-content-start mb-1 pb-2 ">
      <div class="col-md-12 col-sm-6  heading-section ftco-animate pb-2 ">
      <div class="col-md-9  heading-section ftco-animate" >
        <h4 id="mainText" class="mb-2 mt-5"> This is <strong>{{ $singleExam->title }} </strong>Exam, It contains
           <strong>{{ $singleExam->number_of_questions }} </strong> questions. you have 
           <strong>{{ $singleExam->time_estimation }} </strong>minutes to finish it. </h4>
      </div>
      </div>
    </div> 
  <div class="container  "  id="categories_container" >

    <div class="row">
      {{-- main content --}}
      <div class="col-12 d-flex justify-content-center flex-wrap gap-3 m-auto">
       <form action="{{ route('answer.store',$singleExam->id ) }}" method="post" >
        @csrf

        @foreach ($singleExam->question as $question)
        <div class="col-md-9 col-sm-6 mb-2 m-auto" style="max-width:fit-content; overflow:hidden">
          <div class="card" style="width: 65rem; ">
            <div class="card-body ">

            <h5 class="card-title"> <strong>{{$question->number}})</strong> {{ $question->text }}</h5>
    
            <div class="px-4 mb-2"><input  type="radio" value="{{ $question->option1 }}" name="{{ $question->id }}"><span style="margin-left: 1%;">{{ $question->option1 }}</span></div>
            <div class="px-4 mb-2"><input  type="radio" value="{{ $question->option2 }}" name="{{ $question->id }}"><span style="margin-left: 1%;">{{ $question->option2 }}</span></div>
            <div class="px-4 mb-2"><input  type="radio" value="{{ $question->option3 }}" name="{{ $question->id }}"><span style="margin-left: 1%;">{{ $question->option3 }}</span></div>
            <div class="px-4 mb-2"><input  type="radio" value="{{ $question->option4 }}" name="{{ $question->id }}"><span style="margin-left: 1%;">{{ $question->option4 }}</span></div>
          </div>
        </div>
          </div>
        @endforeach
        
         <div class="d-flex justify-content-end mt-2" style="margin-right: 12.5%;">
          <button id="submit-exam" class="btn px-5" 
          >Finish </button></div>
          </form>
           </div>
     
    {{-- end main content --}}
    {{-- pagination part --}}
    <div style="justify-content: center; 
    margin-left:50%;margin-top:5%;margin-bottom:5%">
      {{-- {!! $exams->links() !!} --}}
    </div>
    {{-- end pagination part --}}
  </div>
  </div>




@endsection

