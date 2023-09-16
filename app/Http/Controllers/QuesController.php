<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuesController extends Controller
{
     public function CreateQ(){
          
        return view('Admin.Ques.CreateQ');

    }
}
