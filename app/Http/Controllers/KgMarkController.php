<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kgamark;
use App\Kgbmark;
use App\Student;

class KgMarkController extends Controller
{
    public function KgAMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','KG-Section-A')        
                  ->get();
    	
    	return view('Admin.KgMark.KgAMarkSheetCreate',compact('Student'));
    }


    public function KgAIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.KgMark.KgAIncMarkS',compact('Student'));
    }

    public function SaveKgAMarkSh(Request $request){
          
         $Playamarksheet = new Kgamark();
        
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

         return redirect('/KgAMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

    public function KgAMarkSheetView(){
       
    	 $Playamarksheet = Kgamark::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.KgMark.KgAMarkSheetView',compact('Playamarksheet'));
    }

     public function KgAMSheetEdit($id){
       
    	$Playamarksheet = Kgamark::where('id',$id)
                        ->first();      
    	return view('Admin.KgMark.KgAMSheetEdit',compact('Playamarksheet'));
    }


     public function UpdateKgAMarkSh(Request $request){
          
         $Playamarksheet = Kgamark::find( $request->id );
        
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

         return redirect('/KgAMarkSheetView')->with('Message','Mark Sheet Update');
    }

     public function KgAMSheetPrint($id){
       
    	$Playamarksheet = Kgamark::where('id',$id)
                        ->first();      
    	return view('Admin.KgMark.KgAMSheetPrint',compact('Playamarksheet'));
    }

     public function KgAMSheetDelete(Request $request){
         
         $Kgamark = Kgamark::find($request->id);
         $Kgamark->delete();

         return redirect('/KgAMarkSheetView')->with('Message','Mark Sheet Delete');

    }




        //KG B Marksheet

    public function KgBMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','KG-Section-B')        
                  ->get();
    	
    	return view('Admin.KgMark.KgBMarkSheetCreate',compact('Student'));
    }


    public function KgBIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.KgMark.KgBIncMarkS',compact('Student'));
    }

    public function SaveKgBMarkSh(Request $request){
          
         $Playamarksheet = new Kgbmark();
        
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

         return redirect('/KgBMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

    public function KgBMarkSheetView(){
       
    	 $Playamarksheet = Kgbmark::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.KgMark.KgBMarkSheetView',compact('Playamarksheet'));
    }

     public function KgBMSheetEdit($id){
       
    	$Playamarksheet = Kgbmark::where('id',$id)
                        ->first();      
    	return view('Admin.KgMark.KgBMSheetEdit',compact('Playamarksheet'));
    }


     public function UpdateKgBMarkSh(Request $request){
          
         $Playamarksheet = Kgbmark::find( $request->id );
        
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

         return redirect('/KgBMarkSheetView')->with('Message','Mark Sheet Update');
    }

     public function KgBMSheetPrint($id){
       
    	$Playamarksheet = Kgbmark::where('id',$id)
                        ->first();      
    	return view('Admin.KgMark.KgBMSheetPrint',compact('Playamarksheet'));
    }

     public function KgBMSheetDelete(Request $request){
         
         $Kgamark = Kgbmark::find($request->id);
         $Kgamark->delete();

         return redirect('/KgBMarkSheetView')->with('Message','Mark Sheet Delete');

    }
}
