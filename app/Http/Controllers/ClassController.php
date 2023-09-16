<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classcreate;


class ClassController extends Controller
{
    public function ClassCreate(){
           
        return view('Admin.Class.ClassCreate');

    }

     public function SaveClass(Request $request){
         
         $Class = new Classcreate();
         $Class->ClassName = $request->ClassName;
         $Class->Description = $request->Description;
        
         $Class -> save();

         return redirect('/ClassCreate')->with('Message','Class Saved');
    }

    public function ViewClass(){
           $ClassName = Classcreate::orderBy('ClassName','ASC')
                   ->get();
        return view('Admin.Class.ViewClass',compact('ClassName'));

    }
}
