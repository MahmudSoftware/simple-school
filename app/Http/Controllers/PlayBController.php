<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\PsbSalary;

class PlayBController extends Controller
{
    public function PlayBSalary(){

              $Student = Student::where('Class','Play-Karoby')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.PlayBSalaryAll',compact('Student'));

    }

     public function PlayBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $PsbSalary = PsbSalary::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.PlayBSalary',compact('Student','PsbSalary'));

    }

     public function SavePlayBSalary(Request $request){
        
         $PsbSalary = new PsbSalary();
        
         $PsbSalary->StdImage = $request->StdImage;
         $PsbSalary->StudentsName = $request->StudentsName;
         $PsbSalary->Roll = $request->Roll;
         $PsbSalary->StudentID = $request->StudentID;
         $PsbSalary->Date = $request->Date;
         $PsbSalary->Descriptionon = $request->Descriptionon;
         $PsbSalary->UnitPriceon = $request->UnitPriceon;
         $PsbSalary->Quantityon = $request->Quantityon;
         $PsbSalary->TotalPriceon = $request->TotalPriceon;
         $PsbSalary->Descriptiontw = $request->Descriptiontw;
         $PsbSalary->Unittw = $request->Unittw;
         $PsbSalary->Pricetw = $request->Pricetw;
         $PsbSalary->TotalPricetw = $request->TotalPricetw;
         $PsbSalary->Descriptionth = $request->Descriptionth;
         $PsbSalary->UnitPriceth = $request->UnitPriceth;
         $PsbSalary->Quantityth = $request->Quantityth;
         $PsbSalary->Totalth = $request->Totalth;
         $PsbSalary->Descriptionfo = $request->Descriptionfo;
         $PsbSalary->UnitPricefo = $request->UnitPricefo;
         $PsbSalary->Quantityfo = $request->Quantityfo;
         $PsbSalary->Totalfo = $request->Totalfo;
         $PsbSalary->Descriptionfi = $request->Descriptionfi;
         $PsbSalary->UnitPricefi = $request->UnitPricefi;
         $PsbSalary->Quantityfi = $request->Quantityfi;
         $PsbSalary->TotalFive = $request->TotalFive;
         $PsbSalary->TotalCPrices = $request->TotalCPrices;
         
         $PsbSalary -> save();

         return redirect('/PlayBsList')->with('Message','Salary  Get');
    }

    public function PlayBsList(){
        $PsbSalary = PsbSalary::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.PlayBsList',compact('PsbSalary'));

    }


    public function PlayBPaySalaryPrint($id){
              
              $PsbSalary = PsbSalary::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.PlayBPaySalaryPrint',compact('PsbSalary'));

    }

     public function PlayBPaySalaryDelete(Request $request){
         
         $PsbSalary = PsbSalary::find($request->id);
         $PsbSalary->delete();

         return redirect('/PlayBsList')->with('Message','Salary Sheet Delete');

    }
}
