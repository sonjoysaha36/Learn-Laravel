<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //__index method
    public function index()
    {
        // dd(app());
        return view('address');
    }
    public function contact_index()
    {
        // dd(app());
        return view('contact');
    }
}
