<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Stattent;

class StudentController extends Controller
{
    

    public function StudentCreate(){

    	return view('Admin.Student.StudentCreate');

    }

    public function StudentSave(Request $request){
         


        $StudentImage = $request->file('Photo');
        $StudentImageName = $StudentImage->getClientOriginalName();
        $UploadUrl = 'public/images/'.date('Ymdts').'/';
        $StudentImage -> move($UploadUrl,$StudentImageName); 
        $StudentImageUrl = $UploadUrl.$StudentImageName;
        


         $Student = new Student();
         $Student->StudentId = $request->StudentId;
         $Student->StudentName = $request->StudentName;
         $Student->FathersName = $request->FathersName;
         $Student->MothersName = $request->MothersName;
         $Student->MobileNumber = $request->MobileNumber;
         $Student->Class = $request->Class;
         $Student->Roll = $request->Roll;
         $Student->Address = $request->Address;
         $Student->Photo = $StudentImageUrl;
         $Student->JoiningDate = $request->JoiningDate;
         
         $Student -> save();

         return redirect('/StudentCreate')->with('Message','Student Info Saved');
    }

    public function StudentList(){

        return view('Admin.Student.StudentList');

    }

    public function AllStudentList(){
    $Student = Student::orderBy('id','DESC')
             ->get();
        return view('Admin.Student.AllStudentList',compact('Student'));

    }

    

    

    public function StudentAttentest(){
    $Student = Student::orderBy('StudentName','ASC')
             ->get();
        return view('Admin.Student.StudentAttentest',compact('Student'));

    }
       
        public function AttendanceSave(Request $request){
         
         $Stattent = new Stattent();
         $Stattent->Class = $request->Class;
         $Stattent->StudentNane = $request->StudentNane;
         $Stattent->AttendanceStatus = $request->AttendanceStatus;
         $Stattent->Resone = $request->Resone;
         $Stattent->Date = $request->Date;
         
         $Stattent -> save();

         return redirect('/StudentAttentest')->with('Message','Student Saved');
    }


     public function ViewsAttentest(){
  
        return view('Admin.Student.ViewsAttentest');

    }

     public function PlayAattent(){

           $Student = Stattent::orderBy('Roll','ASC')
                     ->where('Class','Play-Section-A')
                     ->get();
                     
        return view('Admin.Aattent.PlayAattent',compact('Student'));

    }

    public function DeleteStudent(Request $request){
         
         $Student = Student::find($request->id);
         $Student->delete();

         return redirect('/AllStudentList')->with('Message','Student Delete');

    }
}
