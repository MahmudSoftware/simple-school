<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Playatent;

class AttentestController extends Controller
{
     public function PlayAtents(){
           
           $Student = Student::where('Class','Play-Section-A')
                      ->orderBy('StudentName','ASC')
                      ->get();
    	
    	return view('Admin.Aattent.PaAttents',compact('Student'));
    }

     public function PlayAtentsSave(Request $request){
         
         $Playatent = new Playatent();
         $Playatent->Date = $request->Date;
         $Playatent->StudentName = $request->StudentName;
         $Playatent->Status = $request->Status;
         $Playatent->Remurk = $request->Remurk;
         
         $Playatent -> save();

         return redirect('/PlayAtents')->with('Message','Attentes Saved');
    }

     public function StuAttentsListPA(){
           
           $Playatent = Playatent::orderBy('Date','ASC')
                      ->get();
        
        return view('Admin.Aattent.StuAttentsListPA',compact('Playatent'));
    }


    public function DeletePlayatents(Request $request){
         
         $Playatent = Playatent::find($request->id);
         $Playatent->delete();

         return redirect('/StuAttentsListPA')->with('Message','Attentes Delete');

    }
}
