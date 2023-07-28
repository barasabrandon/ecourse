<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,[
            'title'=>'required',
            'description'=>'required',
            'file' => 'nullable|mimes:pdf,docx,doc',
        ]);  

        if ( $validator->fails()) {
          return redirect()->route('courses.create')->with('error', 'Enter all fields.');
        }

        $course = new Courses();
        if ($request->hasFile('file')) {
                       //Filename 
                       $filename = $request->input('title');
 
                       //Extension
                       $extension = $request->file('file')->getClientOriginalExtension();
                       //Filename to store
                       $filenameToStore = $filename.'_'.time().'.'.$extension;
                       $file= $request->file('file')->storeAs('courses' , $filenameToStore);
                    //    dd($file);
                    if ($file) {
                        $course->title =  $request->input('title');
                        $course->description =  $request->input('description');
                        $course->file =  $filenameToStore;
                        $course->save();
                       return redirect()->back()->with('success', 'File saved');
                    } else {
                       return redirect()->back()->with('error', 'File not saved.');
                    }    

                   
                       
        } else {
            $course->title =  $request->input('title');
            $course->description =  $request->input('description');
            $course->file =  'null';
            $course->save();
            return redirect()->back()->with('error', 'No file');
        }
        
    }

    public function index()
    {
        $courses = Courses::all();
        return view('courses.index')->with([
            'courses' => $courses
        ]);
    }
}
