<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class OptionController extends Controller
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
        $options=Option::all();
        $update=false;
        $questions=Question::all();

       return view('adminSite.manageAnswers',compact('options','update','questions'));
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
        return view('adminSite.manageAnswers');
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
            'option'              =>'required|max:1500',
            'correct'             =>'required|max:11',
            

        ]);
        Option::create([
            'option'              =>$request->option,
            'correct'             =>$request->correct,
            'question_id'        =>$request->question_id
         ]);
         return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {

    }
    public function backendedit(Option $option,$id)
    {
        $update    =  true;
        $option    =  Option::find($id);
        $questions =  Question::all();
        $options   =   Option::all();
        return view('adminSite.manageAnswers',compact('update','option','questions','options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
