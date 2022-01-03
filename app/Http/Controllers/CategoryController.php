<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $user=Auth::user();
      // return $user->role;
      $categories=Category::all();
      $exams = Exam::paginate(3);
       return view('publicSite.allCategories',compact('categories','exams'));
    }

     public function backendindex()
    {
       $categories=Category::all();
       $update=false;
       return view('adminSite.manageCategory',compact('categories','update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
    {
        
    }

    public function backendcreate()
    {
         return view('adminSite.manageCategory');
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
            'name'  =>'required|max:250',
            'image' =>'required|mimes:jpeg,png,gif,jpg,jfif',
          ]);

          if($request->hasFile('image')){
            $file      =$request->image;
            $new_file  =time().$file->getClientOriginalName();
            $file->move('storage/category_images/',$new_file);
          };

          Category::create([
            "name"=>$request->name,
            "image"=>'storage/category_images/'.$new_file

         ]);
           
          return redirect()->back();  
          }

      
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $categories=Category::all();
        $exams = Exam::all();
        $singleCategory=Category::find($id);
       return view('publicSite.allCategories',compact('singleCategory','categories','exams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

     public function backendedit(Category $category,$id)
    {
        $update=true;
        $category = Category::find($id);
        $categories =  Category::all();
        return view('adminSite.manageCategory',compact('category','update','categories'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }
     public function backendupdate(Request $request, Category $category,$id)
    {
        $category = Category::find($id);

         $this->validate($request,[
            'name'=>'required|max:250',
            'image'=>'mimes:jpeg,png,gif,jpg',
          ]);

          if($request->hasFile('image')){
            $file=$request->image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('storage/category_images/',$new_file);
            $category->image ='storage/category_images/'.$new_file ;
          };

        $category->name = $request->name;
        
       
        $category->update();
         return redirect()->route('manageCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
     public function backenddestroy($request)
    {
        $category = Category::find($request);
        $category->delete();
        return redirect()->back();

    }
}
