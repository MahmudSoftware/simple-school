<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolexpence;

class SchoolExpenceController extends Controller
{
     public function SchoolExpenceEntry(){
              
        return view('Admin.SchoolExpence.SchoolExpenceEntry');

    }

     public function SaveSchoolExpence(Request $request){
         
         $Schoolexpence = new Schoolexpence();
         $Schoolexpence->Date = $request->Date;
         $Schoolexpence->Subject = $request->Subject;
         $Schoolexpence->Description = $request->Description;
         $Schoolexpence->Cost = $request->Cost;
         
         $Schoolexpence -> save();

         return redirect('/SchoolExpenceEntry')->with('Message','School Expence Saved');
    }
      
      public function SchoolExpenceList(){
               $Schoolexpence = Schoolexpence::orderBy('id','Desc')
                           ->get();
        return view('Admin.SchoolExpence.SchoolExpenceList',compact('Schoolexpence'));

    }

    public function SchoolExpenceDelete(Request $request){
         
         $Schoolexpence = Schoolexpence::find($request->id);
         $Schoolexpence -> delete();

         return redirect('/SchoolExpenceList')->with('Message','School Expence Delete');

    }
    
}
