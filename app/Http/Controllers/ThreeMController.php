<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Thamark;
use App\Thbmark;

class ThreeMController extends Controller
{
    public function ThreeAMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','STD-Three-Section-A')        
                  ->get();
    	
    	return view('Admin.ThreeMark.ThreeAMarkSheetCreate',compact('Student'));
    }

    public function ThreeAIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.ThreeMark.ThreeAIncMarkS',compact('Student'));
    }

     public function SaveThreeAMarkSh(Request $request){
          
         $Thamark = new Thamark();
        
         $Thamark->StudentID = $request->StudentID;
         $Thamark->Roll = $request->Roll;
         $Thamark->StudentsName = $request->StudentsName;
         $Thamark->Fathersname = $request->Fathersname;
         $Thamark->Subjectone = $request->Subjectone;
         $Thamark->onExmon = $request->onExmon;
         $Thamark->twExmon = $request->twExmon;
         $Thamark->ThreExmon = $request->ThreExmon;
         $Thamark->FiExmon = $request->FiExmon;
         $Thamark->TotalOn = $request->TotalOn;
         $Thamark->AvgOn = $request->AvgOn;
         $Thamark->SubjectTwo = $request->SubjectTwo;
         $Thamark->onExTwo = $request->onExTwo;
         $Thamark->twExmTwo = $request->twExmTwo;
         $Thamark->ThreExTwo = $request->ThreExTwo;
         $Thamark->FiExTwo = $request->FiExTwo;
         $Thamark->TotalTwo = $request->TotalTwo;
         $Thamark->AvgTwo = $request->AvgTwo;
         $Thamark->SubjectThree = $request->SubjectThree;
         $Thamark->onExThree = $request->onExThree;
         $Thamark->twExmThree = $request->twExmThree;
         $Thamark->ThreExmThree = $request->ThreExmThree;
         $Thamark->FiExmThree = $request->FiExmThree;
         $Thamark->TotalThree = $request->TotalThree;
         $Thamark->AvgTotalThree = $request->AvgTotalThree;
         $Thamark->SubjectFour = $request->SubjectFour;
         $Thamark->onExmFour = $request->onExmFour;
         $Thamark->twExmFour = $request->twExmFour;
         $Thamark->ThreeExmFour = $request->ThreeExmFour;
         $Thamark->FiExmFour = $request->FiExmFour;
         $Thamark->TotalFour = $request->TotalFour;
         $Thamark->AvgFour = $request->AvgFour;
         $Thamark->SubjectFive = $request->SubjectFive;
         $Thamark->onExmFive = $request->onExmFive;
         $Thamark->twExmFive = $request->twExmFive;
         $Thamark->ThreExmFive = $request->ThreExmFive;
         $Thamark->FiExmFive = $request->FiExmFive;
         $Thamark->TotalFive = $request->TotalFive;
         $Thamark->AvgFive = $request->AvgFive;
         $Thamark->SubjectSix = $request->SubjectSix;
         $Thamark->onExmSix = $request->onExmSix;
         $Thamark->twExmSix = $request->twExmSix;
         $Thamark->ThreExmSix = $request->ThreExmSix;
         $Thamark->FiExmSix = $request->FiExmSix;
         $Thamark->TotalSix = $request->TotalSix;
         $Thamark->AvgSix = $request->AvgSix; 
         $Thamark->SubjectSv = $request->SubjectSv;
         $Thamark->onExmSv = $request->onExmSv;
         $Thamark->twExmSv = $request->twExmSv;
         $Thamark->ThreExmSv = $request->ThreExmSv;
         $Thamark->FiExmSv = $request->FiExmSv;
         $Thamark->TotalSv = $request->TotalSv;
         $Thamark->AvgSv = $request->AvgSv;
         $Thamark->onExmTotal = $request->onExmTotal;
         $Thamark->twExmTotal = $request->twExmTotal;
         $Thamark->ThreExmTotal = $request->ThreExmTotal;
         $Thamark->FiExmTotal = $request->FiExmTotal;
         $Thamark->onExmAverage = $request->onExmAverage;
         $Thamark->twExmAverage = $request->twExmAverage;
         $Thamark->ThreExmAverage = $request->ThreExmAverage;
         $Thamark->FiExmAverage = $request->FiExmAverage;
         $Thamark->GrandAverage = $request->GrandAverage;
         
         
         $Thamark -> save();

         return redirect('/ThrAMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

     public function ThrAMarkSheetView(){
       
    	 $Playamarksheet = Thamark::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.ThreeMark.ThrAMarkSheetView',compact('Playamarksheet'));
    }

     public function ThreeAMSheetEdit($id){
       
    	$Playamarksheet = Thamark::where('id',$id)
                        ->first();      
    	return view('Admin.ThreeMark.ThreeAMSheetEdit',compact('Playamarksheet'));
    }

     public function UpdateThreeAMarkSh(Request $request){
          
         $Playamarksheet = Thamark::find( $request->id );
        
         $Playamarksheet->StudentID = $request->StudentID;
         $Playamarksheet->Roll = $request->Roll;
         $Playamarksheet->StudentsName = $request->StudentsName;
         $Playamarksheet->Fathersname = $request->Fathersname;
         $Playamarksheet->Subjectone = $request->Subjectone;
         $Playamarksheet->onExmon = $request->onExmon;
         $Playamarksheet->twExmon = $request->twExmon;
         $Playamarksheet->ThreExmon = $request->ThreExmon;
         $Playamarksheet->FiExmon = $request->FiExmon;
         $Playamarksheet->TotalOn = $request->TotalOn;
         $Playamarksheet->AvgOn = $request->AvgOn;
         $Playamarksheet->SubjectTwo = $request->SubjectTwo;
         $Playamarksheet->onExTwo = $request->onExTwo;
         $Playamarksheet->twExmTwo = $request->twExmTwo;
         $Playamarksheet->ThreExTwo = $request->ThreExTwo;
         $Playamarksheet->FiExTwo = $request->FiExTwo;
         $Playamarksheet->TotalTwo = $request->TotalTwo;
         $Playamarksheet->AvgTwo = $request->AvgTwo;
         $Playamarksheet->SubjectThree = $request->SubjectThree;
         $Playamarksheet->onExThree = $request->onExThree;
         $Playamarksheet->twExmThree = $request->twExmThree;
         $Playamarksheet->ThreExmThree = $request->ThreExmThree;
         $Playamarksheet->FiExmThree = $request->FiExmThree;
         $Playamarksheet->TotalThree = $request->TotalThree;
         $Playamarksheet->AvgTotalThree = $request->AvgTotalThree;
         $Playamarksheet->SubjectFour = $request->SubjectFour;
         $Playamarksheet->onExmFour = $request->onExmFour;
         $Playamarksheet->twExmFour = $request->twExmFour;
         $Playamarksheet->ThreeExmFour = $request->ThreeExmFour;
         $Playamarksheet->FiExmFour = $request->FiExmFour;
         $Playamarksheet->TotalFour = $request->TotalFour;
         $Playamarksheet->AvgFour = $request->AvgFour;
         $Playamarksheet->SubjectFive = $request->SubjectFive;
         $Playamarksheet->onExmFive = $request->onExmFive;
         $Playamarksheet->twExmFive = $request->twExmFive;
         $Playamarksheet->ThreExmFive = $request->ThreExmFive;
         $Playamarksheet->FiExmFive = $request->FiExmFive;
         $Playamarksheet->TotalFive = $request->TotalFive;
         $Playamarksheet->AvgFive = $request->AvgFive;
         $Playamarksheet->SubjectSix = $request->SubjectSix;
         $Playamarksheet->onExmSix = $request->onExmSix;
         $Playamarksheet->twExmSix = $request->twExmSix;
         $Playamarksheet->ThreExmSix = $request->ThreExmSix;
         $Playamarksheet->FiExmSix = $request->FiExmSix;
         $Playamarksheet->TotalSix = $request->TotalSix;
         $Playamarksheet->AvgSix = $request->AvgSix; 
         $Playamarksheet->SubjectSv = $request->SubjectSv;
         $Playamarksheet->onExmSv = $request->onExmSv;
         $Playamarksheet->twExmSv = $request->twExmSv;
         $Playamarksheet->ThreExmSv = $request->ThreExmSv;
         $Playamarksheet->FiExmSv = $request->FiExmSv;
         $Playamarksheet->TotalSv = $request->TotalSv;
         $Playamarksheet->AvgSv = $request->AvgSv;
         $Playamarksheet->onExmTotal = $request->onExmTotal;
         $Playamarksheet->twExmTotal = $request->twExmTotal;
         $Playamarksheet->ThreExmTotal = $request->ThreExmTotal;
         $Playamarksheet->FiExmTotal = $request->FiExmTotal;
         $Playamarksheet->onExmAverage = $request->onExmAverage;
         $Playamarksheet->twExmAverage = $request->twExmAverage;
         $Playamarksheet->ThreExmAverage = $request->ThreExmAverage;
         $Playamarksheet->FiExmAverage = $request->FiExmAverage;
         $Playamarksheet->GrandAverage = $request->GrandAverage;
         
         $Playamarksheet -> save();

         return redirect('/ThrAMarkSheetView')->with('Message','Mark Sheet Update');
    }
    
    public function ThreeAMSheetPrint($id){
       
    	$Playamarksheet = Thamark::where('id',$id)
                        ->first();      
    	return view('Admin.ThreeMark.ThreeAMSheetPrint',compact('Playamarksheet'));
    }
    
    public function ThreeAMSheetDelete(Request $request){
         
         $Thamark = Thamark::find($request->id);
         $Thamark->delete();

         return redirect('/ThrAMarkSheetView')->with('Message','Mark Sheet Delete');

    }


    // Three B Marksheet

    public function ThreeBMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','Three-Section-B')        
                  ->get();
        
        return view('Admin.ThreeMark.ThreeBMarkSheetCreate',compact('Student'));
    }

    public function ThreeBIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.ThreeMark.ThreeBIncMarkS',compact('Student'));
    }

     public function SaveThreeBMarkSh(Request $request){
          
         $Playamarksheet = new Thbmark();
        
         $Playamarksheet->StudentID = $request->StudentID;
         $Playamarksheet->Roll = $request->Roll;
         $Playamarksheet->StudentsName = $request->StudentsName;
         $Playamarksheet->Fathersname = $request->Fathersname;
         $Playamarksheet->Subjectone = $request->Subjectone;
         $Playamarksheet->onExmon = $request->onExmon;
         $Playamarksheet->twExmon = $request->twExmon;
         $Playamarksheet->ThreExmon = $request->ThreExmon;
         $Playamarksheet->FiExmon = $request->FiExmon;
         $Playamarksheet->TotalOn = $request->TotalOn;
         $Playamarksheet->AvgOn = $request->AvgOn;
         $Playamarksheet->SubjectTwo = $request->SubjectTwo;
         $Playamarksheet->onExTwo = $request->onExTwo;
         $Playamarksheet->twExmTwo = $request->twExmTwo;
         $Playamarksheet->ThreExTwo = $request->ThreExTwo;
         $Playamarksheet->FiExTwo = $request->FiExTwo;
         $Playamarksheet->TotalTwo = $request->TotalTwo;
         $Playamarksheet->AvgTwo = $request->AvgTwo;
         $Playamarksheet->SubjectThree = $request->SubjectThree;
         $Playamarksheet->onExThree = $request->onExThree;
         $Playamarksheet->twExmThree = $request->twExmThree;
         $Playamarksheet->ThreExmThree = $request->ThreExmThree;
         $Playamarksheet->FiExmThree = $request->FiExmThree;
         $Playamarksheet->TotalThree = $request->TotalThree;
         $Playamarksheet->AvgTotalThree = $request->AvgTotalThree;
         $Playamarksheet->SubjectFour = $request->SubjectFour;
         $Playamarksheet->onExmFour = $request->onExmFour;
         $Playamarksheet->twExmFour = $request->twExmFour;
         $Playamarksheet->ThreeExmFour = $request->ThreeExmFour;
         $Playamarksheet->FiExmFour = $request->FiExmFour;
         $Playamarksheet->TotalFour = $request->TotalFour;
         $Playamarksheet->AvgFour = $request->AvgFour;
         $Playamarksheet->SubjectFive = $request->SubjectFive;
         $Playamarksheet->onExmFive = $request->onExmFive;
         $Playamarksheet->twExmFive = $request->twExmFive;
         $Playamarksheet->ThreExmFive = $request->ThreExmFive;
         $Playamarksheet->FiExmFive = $request->FiExmFive;
         $Playamarksheet->TotalFive = $request->TotalFive;
         $Playamarksheet->AvgFive = $request->AvgFive;
         $Playamarksheet->SubjectSix = $request->SubjectSix;
         $Playamarksheet->onExmSix = $request->onExmSix;
         $Playamarksheet->twExmSix = $request->twExmSix;
         $Playamarksheet->ThreExmSix = $request->ThreExmSix;
         $Playamarksheet->FiExmSix = $request->FiExmSix;
         $Playamarksheet->TotalSix = $request->TotalSix;
         $Playamarksheet->AvgSix = $request->AvgSix; 
         $Playamarksheet->SubjectSv = $request->SubjectSv;
         $Playamarksheet->onExmSv = $request->onExmSv;
         $Playamarksheet->twExmSv = $request->twExmSv;
         $Playamarksheet->ThreExmSv = $request->ThreExmSv;
         $Playamarksheet->FiExmSv = $request->FiExmSv;
         $Playamarksheet->TotalSv = $request->TotalSv;
         $Playamarksheet->AvgSv = $request->AvgSv;
         $Playamarksheet->onExmTotal = $request->onExmTotal;
         $Playamarksheet->twExmTotal = $request->twExmTotal;
         $Playamarksheet->ThreExmTotal = $request->ThreExmTotal;
         $Playamarksheet->FiExmTotal = $request->FiExmTotal;
         $Playamarksheet->onExmAverage = $request->onExmAverage;
         $Playamarksheet->twExmAverage = $request->twExmAverage;
         $Playamarksheet->ThreExmAverage = $request->ThreExmAverage;
         $Playamarksheet->FiExmAverage = $request->FiExmAverage;
         $Playamarksheet->GrandAverage = $request->GrandAverage;
         
         
         $Playamarksheet -> save();

         return redirect('/ThrBMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

     public function ThrBMarkSheetView(){
       
         $Playamarksheet = Thbmark::orderBy('Roll','ASC')
                       ->get();      
        return view('Admin.ThreeMark.ThrBMarkSheetView',compact('Playamarksheet'));
    }

     public function ThreeBMSheetEdit($id){
       
        $Playamarksheet = Thbmark::where('id',$id)
                        ->first();      
        return view('Admin.ThreeMark.ThreeBMSheetEdit',compact('Playamarksheet'));
    }

     public function UpdateThreeBMarkSh(Request $request){
          
         $Playamarksheet = Thbmark::find( $request->id );
        
         $Playamarksheet->StudentID = $request->StudentID;
         $Playamarksheet->Roll = $request->Roll;
         $Playamarksheet->StudentsName = $request->StudentsName;
         $Playamarksheet->Fathersname = $request->Fathersname;
         $Playamarksheet->Subjectone = $request->Subjectone;
         $Playamarksheet->onExmon = $request->onExmon;
         $Playamarksheet->twExmon = $request->twExmon;
         $Playamarksheet->ThreExmon = $request->ThreExmon;
         $Playamarksheet->FiExmon = $request->FiExmon;
         $Playamarksheet->TotalOn = $request->TotalOn;
         $Playamarksheet->AvgOn = $request->AvgOn;
         $Playamarksheet->SubjectTwo = $request->SubjectTwo;
         $Playamarksheet->onExTwo = $request->onExTwo;
         $Playamarksheet->twExmTwo = $request->twExmTwo;
         $Playamarksheet->ThreExTwo = $request->ThreExTwo;
         $Playamarksheet->FiExTwo = $request->FiExTwo;
         $Playamarksheet->TotalTwo = $request->TotalTwo;
         $Playamarksheet->AvgTwo = $request->AvgTwo;
         $Playamarksheet->SubjectThree = $request->SubjectThree;
         $Playamarksheet->onExThree = $request->onExThree;
         $Playamarksheet->twExmThree = $request->twExmThree;
         $Playamarksheet->ThreExmThree = $request->ThreExmThree;
         $Playamarksheet->FiExmThree = $request->FiExmThree;
         $Playamarksheet->TotalThree = $request->TotalThree;
         $Playamarksheet->AvgTotalThree = $request->AvgTotalThree;
         $Playamarksheet->SubjectFour = $request->SubjectFour;
         $Playamarksheet->onExmFour = $request->onExmFour;
         $Playamarksheet->twExmFour = $request->twExmFour;
         $Playamarksheet->ThreeExmFour = $request->ThreeExmFour;
         $Playamarksheet->FiExmFour = $request->FiExmFour;
         $Playamarksheet->TotalFour = $request->TotalFour;
         $Playamarksheet->AvgFour = $request->AvgFour;
         $Playamarksheet->SubjectFive = $request->SubjectFive;
         $Playamarksheet->onExmFive = $request->onExmFive;
         $Playamarksheet->twExmFive = $request->twExmFive;
         $Playamarksheet->ThreExmFive = $request->ThreExmFive;
         $Playamarksheet->FiExmFive = $request->FiExmFive;
         $Playamarksheet->TotalFive = $request->TotalFive;
         $Playamarksheet->AvgFive = $request->AvgFive;
         $Playamarksheet->SubjectSix = $request->SubjectSix;
         $Playamarksheet->onExmSix = $request->onExmSix;
         $Playamarksheet->twExmSix = $request->twExmSix;
         $Playamarksheet->ThreExmSix = $request->ThreExmSix;
         $Playamarksheet->FiExmSix = $request->FiExmSix;
         $Playamarksheet->TotalSix = $request->TotalSix;
         $Playamarksheet->AvgSix = $request->AvgSix; 
         $Playamarksheet->SubjectSv = $request->SubjectSv;
         $Playamarksheet->onExmSv = $request->onExmSv;
         $Playamarksheet->twExmSv = $request->twExmSv;
         $Playamarksheet->ThreExmSv = $request->ThreExmSv;
         $Playamarksheet->FiExmSv = $request->FiExmSv;
         $Playamarksheet->TotalSv = $request->TotalSv;
         $Playamarksheet->AvgSv = $request->AvgSv;
         $Playamarksheet->onExmTotal = $request->onExmTotal;
         $Playamarksheet->twExmTotal = $request->twExmTotal;
         $Playamarksheet->ThreExmTotal = $request->ThreExmTotal;
         $Playamarksheet->FiExmTotal = $request->FiExmTotal;
         $Playamarksheet->onExmAverage = $request->onExmAverage;
         $Playamarksheet->twExmAverage = $request->twExmAverage;
         $Playamarksheet->ThreExmAverage = $request->ThreExmAverage;
         $Playamarksheet->FiExmAverage = $request->FiExmAverage;
         $Playamarksheet->GrandAverage = $request->GrandAverage;
         
         $Playamarksheet -> save();

         return redirect('/ThrBMarkSheetView')->with('Message','Mark Sheet Update');
    }
    
    public function ThreeBMSheetPrint($id){
       
        $Playamarksheet = Thbmark::where('id',$id)
                        ->first();      
        return view('Admin.ThreeMark.ThreeBMSheetPrint',compact('Playamarksheet'));
    }
    
    public function ThreeBMSheetDelete(Request $request){
         
         $Thamark = Thbmark::find($request->id);
         $Thamark->delete();

         return redirect('/ThrBMarkSheetView')->with('Message','Mark Sheet Delete');

    }
}
