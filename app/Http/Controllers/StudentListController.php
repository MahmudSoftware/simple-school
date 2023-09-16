<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentListController extends Controller
{ 
     public function PlayA(){
    $Student = Student::where('Class','Play-Provati')
               ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.PlayA',compact('Student'));

    }
   
   public function PlayB(){
    $Student = Student::where('Class','Play-Karoby')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.PlayB',compact('Student'));

    }

     public function NuA(){
     $Student = Student::where('Class','Nursary-Section-Shovon')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.NuA',compact('Student'));

    }
     public function NuB(){
     $Student = Student::where('Class','Nursary-Section-Janani')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.NuB',compact('Student'));

    }

/*
     public function KgA(){
     $Student = Student::where('Class','KG-Section-A')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.KgA',compact('Student'));

    }
     public function KgB(){
     $Student = Student::where('Class','KG-Section-B')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.KgB',compact('Student'));

    }   */

     public function OneA(){
     $Student = Student::where('Class','STD-One-Anamika')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.OneA',compact('Student'));

    }
     public function OneB(){
     $Student = Student::where('Class','STD-On-Golap')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.OneB',compact('Student'));

    }

     public function TwoA(){
     $Student = Student::where('Class','Two-Section-Bilash')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.TwoA',compact('Student'));

    }


     public function TwoB(){
     $Student = Student::where('Class','Two-Section-Tagor')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.TwoB',compact('Student'));

    }
     
     public function ThreeA(){
     $Student = Student::where('Class','STD-Three-Section-A')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.ThreeA',compact('Student'));

    }
    /*
      public function ThreeB(){
     $Student = Student::where('Class','Three-Section-B')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.ThreeB',compact('Student'));

    }  */

      public function FourA(){
     $Student = Student::where('Class','STD-Four-Section-A')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.FourA',compact('Student'));

    }
    /*
      public function FourB(){
     $Student = Student::where('Class','Four-Section-B')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.FourB',compact('Student'));

    } */

      public function FiveA(){
     $Student = Student::where('Class','STD-Five-Section-A')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.FiveA',compact('Student'));

    }
    /*
      public function FiveB(){
     $Student = Student::where('Class','Five-Section-B')
             ->orderBy('Roll','ASC')
             ->get();
        return view('Admin.Student.FiveB',compact('Student'));

    }  */


}
