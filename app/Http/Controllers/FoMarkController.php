<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Foamark;
use App\Fobmark;
class FoMarkController extends Controller
{
     public function FourAMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','STD-Four-Section-A')        
                  ->get();
    	
    	return view('Admin.FourMark.FourAMarkSheetCreate',compact('Student'));
    }

    public function FourAIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.FourMark.FourAIncMarkS',compact('Student'));
    }

     public function SaveFourAMarkSh(Request $request){
          
         $Playamarksheet = new Foamark();
        
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

         return redirect('/FourAMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

     public function FourAMarkSheetView(){
       
    	 $Playamarksheet = Foamark::orderBy('Roll','ASC')
    	               ->get();      
    	return view('Admin.FourMark.FourAMarkSheetView',compact('Playamarksheet'));
    }

     public function FourAMSheetEdit($id){
       
    	$Playamarksheet = Foamark::where('id',$id)
                        ->first();      
    	return view('Admin.FourMark.FourAMSheetEdit',compact('Playamarksheet'));
    }

     public function UpdateFourAMarkSh(Request $request){
          
         $Playamarksheet = Foamark::find( $request->id );
        
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

         return redirect('/FourAMarkSheetView')->with('Message','Mark Sheet Update');
    }
    
    public function FourAMSheetPrint($id){
       
    	$Playamarksheet = Foamark::where('id',$id)
                        ->first();      
    	return view('Admin.FourMark.FourAMSheetPrint',compact('Playamarksheet'));
    }
    
    public function FourAMSheetDelete(Request $request){
         
         $Foamark = Foamark::find($request->id);
         $Foamark->delete();

         return redirect('/FourAMarkSheetView')->with('Message','Mark Sheet Delete');

    }


    // Four B Marksheet

    public function FourBMarkSheetCreate(){
       
       $Student = Student::orderBy('Roll','ASC')
                  ->where('Class','Four-Section-B')        
                  ->get();
        
        return view('Admin.FourMark.FourBMarkSheetCreate',compact('Student'));
    }

    public function FourBIncMarkS($id){
         
         $Student = Student::where('id',$id)
                        ->first();

        return view('Admin.FourMark.FourBIncMarkS',compact('Student'));
    }

     public function SaveFourBMarkSh(Request $request){
          
         $Playamarksheet = new Fobmark();
        
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

         return redirect('/FourBMarkSheetView')->with('Message','Mark Sheet Save'); //Apadoto
    }

     public function FourBMarkSheetView(){
       
         $Playamarksheet = Fobmark::orderBy('Roll','ASC')
                       ->get();      
        return view('Admin.FourMark.FourBMarkSheetView',compact('Playamarksheet'));
    }

     public function FourBMSheetEdit($id){
       
        $Playamarksheet = Fobmark::where('id',$id)
                        ->first();      
        return view('Admin.FourMark.FourBMSheetEdit',compact('Playamarksheet'));
    }

     public function UpdateFourBMarkSh(Request $request){
          
         $Playamarksheet = Fobmark::find( $request->id );
        
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

         return redirect('/FourBMarkSheetView')->with('Message','Mark Sheet Update');
    }
    
    public function FourBMSheetPrint($id){
       
        $Playamarksheet = Fobmark::where('id',$id)
                        ->first();      
        return view('Admin.FourMark.FourBMSheetPrint',compact('Playamarksheet'));
    }
    
    public function FourBMSheetDelete(Request $request){
         
         $Fobmark = Fobmark::find($request->id);
         $Fobmark->delete();

         return redirect('/FourBMarkSheetView')->with('Message','Mark Sheet Delete');

    }
}
