<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function single_course($course_id){
        $courses = Course::where('course_id', $course_id)->get();
        return view('front.course.single', compact('courses'));
    }
}
