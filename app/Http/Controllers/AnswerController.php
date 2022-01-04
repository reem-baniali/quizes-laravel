<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //     $this->validate($request,[
        //     'user_answer'        =>'required|max:1500',
        //     'exam_id'            =>'required|max:11',
        //     'user_id'            =>'required|max:11',
        //     'question_id'        =>'required|max:11',

        // ]);
      $user_score_per_question=0;
      $final_exam_score=0; 
       $is_pass=0;   
     foreach ($request->except('_token') as $input_question_id => $user_answer) {
         

        Answer::create([
            'user_answer'         =>$user_answer,
            'exam_id'             =>$id,
            'user_id'             =>auth()->user()->id,
            'question_id'         =>$input_question_id
         ]);

         $questions=Question::all();
         foreach($questions as $question){

            if ($input_question_id === $question->id){
              $final_exam_score += $question->points;

             if ($user_answer === $question->correct_answer ){
                $user_score_per_question += $question->points;

         };
              }
       
         }
         $select_exam=Exam::find($id);
         $max_questions=$select_exam->number_of_questions;
         $user_answers = Answer::where('exam_id',$id)->where('user_id',auth()->user()->id)->latest()->take($max_questions)->get();
    }
    Result::create([
             'result'             =>$user_score_per_question,
             'exam_id'             =>$id,
             'user_id'             =>auth()->user()->id,
    ]);
   
        if($user_score_per_question > $final_exam_score/2){
            $is_pass=1;
        };
     return view('publicSite.result',compact('user_score_per_question','final_exam_score','questions','user_answers','is_pass'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
