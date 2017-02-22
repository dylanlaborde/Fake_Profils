<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeController extends Controller
{
    public function getIndex(){
    	return view('fake.index');
    }
}
