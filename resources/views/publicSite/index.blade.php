@extends('publicSite.layouts.master')
@section('content')
    <div class="home-content">
      <div class="container">
        <div class="home-text">
          <h1 class="home-main-text">Easy and intuitive online testing.</h1>
          <p class="home-sub-text">
            <span class="home-head-text">Code Bunker</span>
            is a free website that contains a lot of quizzes about programming
            languages to motivate every student.
            <br />
            <span class="two">
              leveling up your business looks different for everyone because
              everyone is at different stage in their business. Growth Doesn't
              look the same for two people. Let's figure out where you should
              prioritize your energy so level-up and grow your business in the
              way that best for you.
            </span>
          </p>
          <a href="{{route('show_categories')  }}" class="getStart-link">
            <button class="home-btn-getStart">
              Get Started
            </button>
          </a>
        </div>
        <div class="home-image">
          <img src="imgs/homeQuiz.png" alt="image" />
        </div>
      </div>
    </div>
  @endsection