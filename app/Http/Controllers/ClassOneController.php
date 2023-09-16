<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; 
use App\Oneseca;
use App\Onesecb;

class ClassOneController extends Controller
{
     public function OneASalary(){

              $Student = Student::where('Class','STD-One-Anamika')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.OneASalaryAll',compact('Student'));

    }

     public function OneAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Oneseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.OneAPaySalary',compact('Student','Nuasalary'));

    }

     public function SaveOneASalary(Request $request){
        
         $PsbSalary = new Oneseca();
        
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

         return redirect('/OneAsList')->with('Message','Salary  Get');
    }

    public function OneAsList(){
        $Nuasalary = Oneseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.OneAsList',compact('Nuasalary'));

    }

     public function OneASalaryPrint($id){
              
              $Nuasalary = Oneseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.OneASalaryPrint',compact('Nuasalary'));

    }

     public function OneaSalaryDelete(Request $request){
         
         $Oneseca = Oneseca::find($request->id);
         $Oneseca->delete();

         return redirect('/OneAsList')->with('Message','Salary Sheet Delete');

    }








    public function OneBSalary(){

              $Student = Student::where('Class','STD-On-Golap')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.OneBSalaryAll',compact('Student'));

    }

    public function OneBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Onesecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.OneBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveOneBSalary(Request $request){
        
         $Nubsalary = new Onesecb();
        
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

         return redirect('/OneBsList')->with('Message','Salary  Get');
    }



    public function OneBsList(){
        $Onesecb = Onesecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.OneBsList',compact('Onesecb'));

    }

     public function OneBSalaryPrint($id){
              
              $Nuasalary = Onesecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.OneBSalaryPrint',compact('Nuasalary'));

    }

     public function OneBSalaryDelete(Request $request){
         
         $Onesecb = Onesecb::find($request->id);
         $Onesecb -> delete();

         return redirect('/OneBsList')->with('Message','Salary Sheet Delete');

    }
}
