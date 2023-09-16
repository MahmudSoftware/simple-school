<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Nuamark;
use App\Nubmark;

class NursaryMarkController extends Controller
{
    public function NuAMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','Nursary-Section-Shovon')        
                  ->get();
    	
    	return view('Admin.NursaryMark.NuAMarkSheetCreate',compact('Student'));
    }


    public function NuAIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.NursaryMark.NuAIncMarkS',compact('Student'));
    }

    public function SaveNuAMarkSh(Request $request){
          
         $Playamarksheet = new Nuamark();
        
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

         return redirect('/NuAMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

    public function NuAMarkSheetView(){
       
    	 $Playamarksheet = Nuamark::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.NursaryMark.NuAMarkSheetView',compact('Playamarksheet'));
    }

     public function NuAMSheetEdit($id){
       
    	$Playamarksheet = Nuamark::where('id',$id)
                        ->first();      
    	return view('Admin.NursaryMark.NuAMSheetEdit',compact('Playamarksheet'));
    }


     public function UpdateNuAMarkSh(Request $request){
          
         $Playamarksheet = Nuamark::find( $request->id );
        
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

         return redirect('/NuAMarkSheetView')->with('Message','Mark Sheet Update');
    }

     public function NuAMSheetPrint($id){
       
    	$Playamarksheet = Nuamark::where('id',$id)
                        ->first();      
    	return view('Admin.NursaryMark.NuAMSheetPrint',compact('Playamarksheet'));
    }

     public function NuAMSheetDelete(Request $request){
         
         $Nuamark = Nuamark::find($request->id);
         $Nuamark->delete();

         return redirect('/NuAMarkSheetView')->with('Message','Mark Sheet Delete');

    }


    //Nurasry Section B Mark


    public function NuBMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','Nursary-Section-Janani')        
                  ->get();
        
        return view('Admin.NursaryMark.NuBMarkSheetCreate',compact('Student'));
    }


    public function NuBIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.NursaryMark.NuBIncMarkS',compact('Student'));
    }

    public function SaveNuBMarkSh(Request $request){
          
         $Playamarksheet = new Nubmark();
        
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

         return redirect('/NuBMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

    public function NuBMarkSheetView(){
       
         $Playamarksheet = Nubmark::orderBy('Roll','ASC')
                       ->get();      
        return view('Admin.NursaryMark.NuBMarkSheetView',compact('Playamarksheet'));
    }

     public function NuBMSheetEdit($id){
       
        $Playamarksheet = Nubmark::where('id',$id)
                        ->first();      
        return view('Admin.NursaryMark.NuBMSheetEdit',compact('Playamarksheet'));
    }


     public function UpdateNuBMarkSh(Request $request){
          
         $Playamarksheet = Nubmark::find( $request->id );
        
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

         return redirect('/NuBMarkSheetView')->with('Message','Mark Sheet Update');
    }

     public function NuBMSheetPrint($id){
       
        $Playamarksheet = Nubmark::where('id',$id)
                        ->first();      
        return view('Admin.NursaryMark.NuBMSheetPrint',compact('Playamarksheet'));
    }

     public function NuBMSheetDelete(Request $request){
         
         $Nubmark = Nubmark::find($request->id);
         $Nubmark->delete();

         return redirect('/NuBMarkSheetView')->with('Message','Mark Sheet Delete');

    }
}
