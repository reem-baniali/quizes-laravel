<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //  $categories   = Category::all();
        //  $singleCategory = Category::find($id);
         $singleExam = Exam::find($id);
        
        return view('publicSite.quiz', compact('singleExam'));
    }
      public function backendindex()
    {
    
        $categories =Category::all();
        $exams  = Exam::all();
        $update = false;
        return view('adminSite.manageExams',compact('exams','update','categories'));
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
        return view('adminSite.manageExam');
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
            'title'              =>'required|max:1500',
            'time_estimation'    =>'required|max:11',
            'number_of_questions'=>'required|max:11',
            'image'=>'required|mimes:jpeg,png,gif,jpg'

        ]);
           if($request->hasFile('image')){
            $file=$request->image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/category_images/',$new_file);
          };
        Exam::create([
            'title'               =>$request->title,
            'image'               =>'storage/category_images/'.$new_file,
            'time_estimation'     =>$request->time_estimation,
            'number_of_questions' =>$request->number_of_questions,
            'category_id'         =>$request->category_id
         ]);
         return redirect()->back();  
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam,$id)
    {
         $categories   = Category::all();
         $singleCategory = Category::find($id);
         $singleExam = Exam::find($id);
        
        return view('publicSite.category', compact('categories', 'singleCategory','singleExam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }
  public function backendedit(Exam $exam,$id)
    {
        $update=true;
        $exam = Exam::find($id);
        $categories =  Category::all();
        $exams =Exam::all();
        return view('adminSite.manageExams',compact('update','exam','categories','exams'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }
     public function backendupdate(Request $request, Exam $exam,$id)
    {
        $exam = Exam::find($id);

         $this->validate($request,[
            'title'               =>'required|max:250',
            'number_of_questions' =>'required',
            'image'               =>'mimes:jpeg,png,gif,jpg,jfif',
            'time_estimation'     =>'required'
          ]);

        $exam->title               = $request->title;
        $exam->image               = $request->image;
        $exam->number_of_questions = $request->number_of_questions;
        $exam->time_estimation     = $request->time_estimation;
        
       
        $exam->update();
        return redirect()->route('manageExams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
      public function backenddestroy($request)
    {
        $exam = Exam::find($request);
        $exam->delete();
        return redirect()->back();
    }
}
