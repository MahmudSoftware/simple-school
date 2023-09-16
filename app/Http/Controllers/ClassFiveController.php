<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fiveseca;
use App\Fivesecb;

class ClassFiveController extends Controller
{
     public function FiveASalary(){

              $Student = Student::where('Class','STD-Five-Section-A')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.FiveASalaryAll',compact('Student'));

    }

     public function FiveAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Fiveseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.FiveAPaySalary',compact('Student','Nuasalary'));

    }

     public function SaveFiveASalary(Request $request){
        
         $PsbSalary = new Fiveseca();
        
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

         return redirect('/FiveAsList')->with('Message','Salary  Get');
    }

    public function FiveAsList(){
        $Fiveseca = Fiveseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.FiveAsList',compact('Fiveseca'));

    }

     public function FiveASalaryPrint($id){
              
              $Nuasalary = Fiveseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.FiveASalaryPrint',compact('Nuasalary'));

    }

     public function FiveASalaryDelete(Request $request){
         
         $Fiveseca = Fiveseca::find($request->id);
         $Fiveseca->delete();

         return redirect('/FiveAsList')->with('Message','Salary Sheet Delete');

    }








    public function FiveBSalary(){

              $Student = Student::where('Class','Five-Section-B')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.FiveBSalaryAll',compact('Student'));

    }

    public function FiveBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Fivesecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.FiveBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveFiveBSalary(Request $request){
        
         $Nubsalary = new Fivesecb();
        
         $Nubsalary->StdImage = $request->StdImage;
         $Nubsalary->StudentsName = $request->StudentsName;
         $Nubsalary->Roll = $request->Roll;
         $Nubsalary->StudentID = $request->StudentID;
         $Nubsalary->Date = $request->Date;
         $Nubsalary->Descriptionon = $request->Descriptionon;
         $Nubsalary->UnitPriceon = $request->UnitPriceon;
         $Nubsalary->Quantityon = $request->Quantityon;
         $Nubsalary->TotalPriceon = $request->TotalPriceon;
         $Nubsalary->Descriptiontw = $request->Descriptiontw;
         $Nubsalary->Unittw = $request->Unittw;
         $Nubsalary->Pricetw = $request->Pricetw;
         $Nubsalary->TotalPricetw = $request->TotalPricetw;
         $Nubsalary->Descriptionth = $request->Descriptionth;
         $Nubsalary->UnitPriceth = $request->UnitPriceth;
         $Nubsalary->Quantityth = $request->Quantityth;
         $Nubsalary->Totalth = $request->Totalth;
         $Nubsalary->Descriptionfo = $request->Descriptionfo;
         $Nubsalary->UnitPricefo = $request->UnitPricefo;
         $Nubsalary->Quantityfo = $request->Quantityfo;
         $Nubsalary->Totalfo = $request->Totalfo;
         $Nubsalary->Descriptionfi = $request->Descriptionfi;
         $Nubsalary->UnitPricefi = $request->UnitPricefi;
         $Nubsalary->Quantityfi = $request->Quantityfi;
         $Nubsalary->TotalFive = $request->TotalFive;
         $Nubsalary->TotalCPrices = $request->TotalCPrices;
         
         $Nubsalary -> save();

         return redirect('/FiveBsList')->with('Message','Salary  Get');
    }



    public function FiveBsList(){
        $Fivesecb = Fivesecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.FiveBsList',compact('Fivesecb'));

    }

     public function FiveBSalaryPrint($id){
              
              $Nuasalary = Fivesecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.FiveBSalaryPrint',compact('Nuasalary'));

    }

     public function FiveBSalaryDelete(Request $request){
         
         $Fivesecb = Fivesecb::find($request->id);
         $Fivesecb -> delete();

         return redirect('/FiveBsList')->with('Message','Salary Sheet Delete');

    }
}
