<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Course_Category;
use App\Models\Course_Sub_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function courseadmin(){
        return view('course.course');
    }

    public function addcourse(){
       return view('course.new');
    }

    public function category(Request $request){
        $course = new Course_Category();
        $course->name = $request->name;
        $course->save();
        return redirect()->back()->with('success', 'Category Added');
    }

    public function subcategory(Request $request){
        $course = new Course_Sub_Category();
        $course->category_id = $request->category_id;
        $course->name = $request->name;
        $course->save();
        return redirect()->back()->with('success', 'Category Added');
    }

    public function newcourse(Request $request){

        $course = new Course();

        $course->user_id = Auth::user()->id;
        $course->course_id = 'C'. uniqid();
        $course->name = $request->name;
        $course->category = $request->category;
        $course->sub_category = $request->sub_category;
        $course->duration = $request->duration;
        $course->lectures = $request->lectures;
        $course->projects = $request->projects;
        $course->overview = $request->overview;
        $course->intro_video = $request->intro_video;
        $course->fees = $request->fees;
        $course->save();

        return redirect()->route('courseadmin')->with('success', 'Course Uploaded');

    }
}

