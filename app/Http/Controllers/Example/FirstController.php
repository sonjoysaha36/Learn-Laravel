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

    // student store
    public function StudentStore(Request $request)
    {
        dd($request->all());
    }
    public function store(Request $request)
    {   $validated = $request->validate([
        'name' => 'required|max:55',
        'email' => 'required|max:55',
        'password' => 'required|min:6|max:10',
    ]);
        dd($request->all());
    }
}
