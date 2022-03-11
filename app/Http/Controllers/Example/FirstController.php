<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function contactData(Request $request)
    {  
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;

        return redirect()->route('about');
    }
}
