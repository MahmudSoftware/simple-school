<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examtype;
use App\Subject;
use App\Seatplan;
use App\Room;
use App\Section;
use App\Classcreate;



class ExtarController extends Controller
{
    public function ExamType(){

    	
    	return view('Admin.Extra.ExamType');
    }

    public function SaveExamType(Request $request){
         
         $SaveExamType = new Examtype();
         $SaveExamType->Examtype = $request->Examtype;
         $SaveExamType->Description = $request->Description;
        
         
         $SaveExamType -> save();

         return redirect('/ExamType')->with('Message','Exam Type Saved');
    }


    public function ExamTypeList(){
         
         $Examtype = Examtype::orderBy('id','DESC')
                   ->get();
    	
    	return view('Admin.Extra.ExamTypeList',compact('Examtype'));
    }

    public function ExamtypeDelete(Request $request){

         
         $Examtype = Examtype::find($request->id);
         $Examtype->delete();

         return redirect('/ExamTypeList')->with('Message','Exam Type Delete');
    }


    public function StudentSubject(){
         
        
    	
    	return view('Admin.Extra.StudentSubject');
    }

     public function SaveClassSubject(Request $request){
         
         $Subject = new Subject();
         $Subject->Subject = $request->Subject;
         $Subject->Description = $request->Description;
        
         
         $Subject -> save();

         return redirect('/StudentSubject')->with('Message','Subject Saved');
    }

    public function SubjectList(){
         
         $Subject = Subject::orderBy('id','DESC')
                   ->get();
    	
    	return view('Admin.Extra.SubjectList',compact('Subject'));
    }

     
      public function DeleteSubject(Request $request){

         
         $Subject = Subject::find($request->id);
         $Subject->delete();

         return redirect('/SubjectList')->with('Message','Subject Delete');
    }




    public function CreateSeatPlan(){

         $Classcreate =Classcreate::orderBy('ClassName','ASC')
                      ->get();
        $Room = Room::orderBy('RoomNameNo','ASC')
                     ->get();
          $Examtype = Examtype::orderBy('Examtype','ASC')
                    ->get();
          $Section = Section::orderBy('SectionName','ASC')
                    ->get();
        return view('Admin.SeatPlan.CreateSeatPlan',compact('Examtype','Room','Classcreate','Section'));
    }


    public function DeleteSeatPlan(Request $request){
         
         $Seatplan = Seatplan::find($request->id);
         $Seatplan->delete();

         return redirect('/ViewSeatPlan')->with('Message','Seat Plan Delete');

    }




    public function SaveSeatPlan(Request $request){
         
         $Seatplan = new Seatplan();
         $Seatplan->ExmType = $request->ExmType;
         $Seatplan->RoomName = $request->RoomName;
         $Seatplan->Class = $request->Class;
         $Seatplan->Section = $request->Section;
         $Seatplan->Roll = $request->Roll;
         
         $Seatplan -> save();

         return redirect('/CreateSeatPlan')->with('Message','Seat Plan Saved');
    }


     public function ViewSeatPlan(){

        $Seatplans = Seatplan::orderBy('id','DESC')
                     ->get();
        return view('Admin.SeatPlan.ViewSeatPlan',compact('Seatplans'));
    }

    

    public function EditSeatPlan($id){

        $Classcreate =Classcreate::orderBy('ClassName','ASC')
                      ->get();
        $Room = Room::orderBy('RoomNameNo','ASC')
                     ->get();
          $Examtype = Examtype::orderBy('Examtype','ASC')
                    ->get();
          $Section = Section::orderBy('SectionName','ASC')
                    ->get();

        $Seatplan = Seatplan::where('id',$id)
                        ->first();      
        return view('Admin.SeatPlan.EditSeatPlan',compact('Seatplan','Classcreate','Room','Examtype','Section'));
    }

    public function UpdateSeatPlan(Request $request){
          

         $Seatplan = Seatplan::find( $request->id );
        
         $Seatplan->ExmType = $request->ExmType;
         $Seatplan->RoomName = $request->RoomName;
         $Seatplan->Class = $request->Class;
         $Seatplan->Section = $request->Section;
         $Seatplan->Roll = $request->Roll;
         
         $Seatplan -> save();

         return redirect('/ViewSeatPlan')->with('Message','Seat Plan Update');
    }

    public function PrintSeatPlan($id){
        
             $Seatplan = Seatplan::where('id',$id)
                     ->first();
                     
        return view('Admin.SeatPlan.PrintSeatPlan',compact('Seatplan'));
    }
}
