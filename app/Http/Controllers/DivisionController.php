<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class DivisionController extends Controller
{
    public function view(){
        return view('pages.divisions.division');
    }
}
