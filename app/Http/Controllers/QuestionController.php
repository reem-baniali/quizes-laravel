<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Exam;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function backendindex()
    {
        $questions  = Question::all();
        $exams      = Exam::all();
        $update     = false;

        return view('adminSite.manageQues',compact('questions','update','exams'));

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
    public function backendcreate()
    {
        
        return view('adminSite.manageQues');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
     public function backendstore(Request $request)
    {
        $this->validate($request,[
            'text'     =>'required|max:1500',
            'points'   =>'required|max:11',
            'exam_id'  =>'required|max:3'

        ]);
        Question::create([
            'text'           => $request->text,
            'number'         => $request->number,
            'points'         => $request->points,
            'option1'        => $request->option1,
            'option2'        => $request->option2,
            'option3'        => $request->option3,
            'option4'        => $request->option4,
            'correct_answer' => $request->correct_answer,
            'exam_id'        => $request->exam_id
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }
    public function backendedit(Question $question,$id)
    {
        $update=true;
        $question = Question::find($id);
        $exams =  Exam::all();
        $questions =Question::all();
        return view('adminSite.manageQues',compact('update','question','questions','exams'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }
      public function backendupdate(Request $request, Question $question,$id)
    {
        $question = Question::find($id);

         $this->validate($request,[
            'text'=>'required|max:1500',
            'points'=>'required',
            'exam_id'=>'required',
          ]);

        $question->text           = $request->text;
        $question->points         = $request->points;
        $question->option1        = $request->option1;
        $question->option2        = $request->option2;
        $question->option3        = $request->option3;
        $question->option4        = $request->option4;
        $question->correct_answer = $request->correct_answer;
        $question->exam_id        = $request->exam_id;
        
       
        $question->update();
        return redirect()->route('manageQues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
     public function backenddestroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->back();
    }
}
