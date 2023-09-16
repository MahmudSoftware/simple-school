<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Playbmarksheet;

class PlayBMarkController extends Controller
{
     public function PlayBMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','Play-Karoby')        
                  ->get();
    	
    	return view('Admin.PlayBMark.PlayBMarkSheetAll',compact('Student'));
    }

    public function PlayBIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.PlayBMark.PlayBIncMarkS',compact('Student'));
    }

     public function SavePlayBMarkSh(Request $request){

         $Playamarksheet = new Playbmarksheet();
        
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
         $Playamarksheet->onExmTotal = $request->onExmTotal;
         $Playamarksheet->twExmTotal = $request->twExmTotal;
         $Playamarksheet->ThreExmTotal = $request->ThreExmTotal;
         $Playamarksheet->FiExmTotal = $request->FiExmTotal;
         $Playamarksheet->GrandTotal = $request->GrandTotal;
         $Playamarksheet->onExmAverage = $request->onExmAverage;
         $Playamarksheet->twExmAverage = $request->twExmAverage;
         $Playamarksheet->ThreExmAverage = $request->ThreExmAverage;
         $Playamarksheet->FiExmAverage = $request->FiExmAverage;
         $Playamarksheet->GrandAverage = $request->GrandAverage;
         $Playamarksheet->GrandTotalAverage = $request->GrandTotalAverage;
         
         $Playamarksheet -> save();

         return redirect('/PlayBMarkSheetView')->with('Message','Mark Sheet Save');
    }

    public function PlayBMarkSheetView(){
       
    	 $Playamarksheet = Playbmarksheet::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.PlayBMark.PlayBMarkSheetView',compact('Playamarksheet'));
    }

     public function PlayBMSheetEdit($id){
       
    	$Playamarksheet = Playbmarksheet::where('id',$id)
                        ->first();      
    	return view('Admin.PlayBMark.PlayBMSheetEdit',compact('Playamarksheet'));
    }


     public function UpdatePlayBMarkSh(Request $request){
          
         $Playamarksheet = Playbmarksheet::find( $request->id );
        
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

         return redirect('/PlayBMarkSheetView')->with('Message','Mark Sheet Update');
    }

     public function PlayBMSheetDelete(Request $request){
         
         $Playbmarksheet = Playbmarksheet::find($request->id);
         $Playbmarksheet->delete();

         return redirect('/PlayBMarkSheetView')->with('Message','Mark Sheet Delete');

    }

     public function PlayBMSheetPrint($id){
       
    	$Playamarksheet = Playbmarksheet::where('id',$id)
                        ->first();      
    	return view('Admin.PlayBMark.PlayBMSheetPrint',compact('Playamarksheet'));
    }
}
