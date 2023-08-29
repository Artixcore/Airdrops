<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BuyCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{


    public function buycourse(Request $request){
        $course = new BuyCourse();
        $course->user_id = Auth::user()->id;
        $course->cart_id = uniqid();
        $course->course_id = $request->course_id;
        $course->name  = $request->name;
        $course->email = $request->email;
        $course->phone = $request->phone;
        $course->save();
        return redirect()->back()->with('success', 'Booking Successful');
    }
}
