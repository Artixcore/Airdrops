<?php

namespace App\Http\Controllers;

use App\Models\BookCourse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bookcourse(Request $request){

        $book = new BookCourse();

        $book->course_id = $request->course_id;
        $book->user_id = $request->user_id;
        $book->name = $request->name;
        $book->phone = $request->phone;
        $book->email = $request->email;
        $book->promo = $request->promo;

        $book->save();

        return redirect()->back()->with('success', 'Booking Success');

    }
}
