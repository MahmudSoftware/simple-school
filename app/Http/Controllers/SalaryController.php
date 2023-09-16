<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Pasalary;


class SalaryController extends Controller
{
     public function StudentSalary(){
    
        return view('Admin.Student.StudentSalary');

    }

    public function PlayASalary(){

              $Student = Student::where('Class','Play-Provati')
                         ->orderBy('Roll','ASC')
                         ->get(); 

        return view('Admin.Salary.PlayASalaryAll',compact('Student'));

    }


    public function PlayAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
              $Salary = Pasalary::orderBy('Roll','ASC')
                      ->get();
        return view('Admin.Salary.PlayASalary',compact('Student','Salary'));

    }

    public function SavePlayASalary(Request $request){
         $Pasalary = new Pasalary();
        
         $Pasalary->StdImage = $request->StdImage;
         $Pasalary->StudentsName = $request->StudentsName;
         $Pasalary->Roll = $request->Roll;
         $Pasalary->StudentID = $request->StudentID;
         $Pasalary->Date = $request->Date;
         $Pasalary->Descriptionon = $request->Descriptionon;
         $Pasalary->UnitPriceon = $request->UnitPriceon;
         $Pasalary->Quantityon = $request->Quantityon;
         $Pasalary->TotalPriceon = $request->TotalPriceon;
         $Pasalary->Descriptiontw = $request->Descriptiontw;
         $Pasalary->Unittw = $request->Unittw;
         $Pasalary->Pricetw = $request->Pricetw;
         $Pasalary->TotalPricetw = $request->TotalPricetw;
         $Pasalary->Descriptionth = $request->Descriptionth;
         $Pasalary->UnitPriceth = $request->UnitPriceth;
         $Pasalary->Quantityth = $request->Quantityth;
         $Pasalary->Totalth = $request->Totalth;
         $Pasalary->Descriptionfo = $request->Descriptionfo;
         $Pasalary->UnitPricefo = $request->UnitPricefo;
         $Pasalary->Quantityfo = $request->Quantityfo;
         $Pasalary->Totalfo = $request->Totalfo;
         $Pasalary->Descriptionfi = $request->Descriptionfi;
         $Pasalary->UnitPricefi = $request->UnitPricefi;
         $Pasalary->Quantityfi = $request->Quantityfi;
         $Pasalary->TotalFive = $request->TotalFive;
         $Pasalary->TotalCPrices = $request->TotalCPrices;
         
         $Pasalary -> save();

         return redirect('/PlayAsList')->with('Message','Salary  Get');
    }

    public function PlayAPaySalaryDelete(Request $request){
         
         $Pasalary = Pasalary::find($request->id);
         $Pasalary->delete();

         return redirect('/PlayAsList')->with('Message','Salary Sheet Delete');

    }


     public function PlayAPaySalaryPrint($id){
              
              $Pasalary = Pasalary::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.PlayAPaySalaryPrint',compact('Pasalary'));

    }

    public function ViewStudentSalaryList(){
              
        return view('Admin.Salary.ViewStudentSalaryList');

    }
}
