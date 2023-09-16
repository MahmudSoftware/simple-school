<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;

class TeacherController extends Controller
{
      public function TeacherEntry(){
             $Subject = Subject::orderBy('Subject','ASC')
                        ->get();
    	return view('Admin.Teacher.TeacherEntry',compact('Subject'));

    }

    public function TeacherSave(Request $request){
         
        $TeacherImage = $request->file('Photo');
        $TeacherImageName = $TeacherImage->getClientOriginalName();
        $UploadUrl = 'public/images/'.date('Ymdts').'/';
        $TeacherImage -> move($UploadUrl,$TeacherImageName); 
        $TeacherImageUrl = $UploadUrl.$TeacherImageName;

         $Teacher = new Teacher();
         $Teacher->TeachersName = $request->TeachersName;
         $Teacher->Address = $request->Address;
         $Teacher->Phone = $request->Phone;
         $Teacher->EduQuly = $request->EduQuly;
         $Teacher->SofClass = $request->SofClass;
         $Teacher->Photo = $TeacherImageUrl;
         $Teacher->JoiningDate = $request->JoiningDate;
        
         
         $Teacher -> save();

         return redirect('/TeacherEntry')->with('Message','Teacher Saved');
    }


     public function TeacherList(){
         $Teacher = Teacher::orderBy('TeachersName','asc')
                 ->get();
    	return view('Admin.Teacher.TeacherList',compact('Teacher'));

    }


     public function TeachersDelete(Request $request){
         
         $Teacher = Teacher::find($request->id);
         $Teacher->delete();

         return redirect('/TeacherList')->with('Message','Teacher Delete');

    }
}
