<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



}
