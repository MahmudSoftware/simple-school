<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Twoseca;
use App\Twosecb;

class ClassTwoController extends Controller
{
     public function TwoASalary(){

              $Student = Student::where('Class','Two-Section-Bilash')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.TwoASalaryAll',compact('Student'));

    }

     public function TwoAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Twoseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.TwoAPaySalary',compact('Student','Nuasalary'));

    }

     public function SaveTwoASalary(Request $request){
        
         $PsbSalary = new Twoseca();
        
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

         return redirect('/TwoAsList')->with('Message','Salary  Get');
    }

    public function TwoAsList(){
        $Twoseca = Twoseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.TwoAsList',compact('Twoseca'));

    }

     public function TwoASalaryPrint($id){
              
              $Nuasalary = Twoseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.TwoASalaryPrint',compact('Nuasalary'));

    }

     public function TwoASalaryDelete(Request $request){
         
         $Twoseca = Twoseca::find($request->id);
         $Twoseca->delete();

         return redirect('/TwoAsList')->with('Message','Salary Sheet Delete');

    }








    public function TwoBSalary(){

              $Student = Student::where('Class','Two-Section-Tagor')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.TwoBSalaryAll',compact('Student'));

    }

    public function TwoBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Twosecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.TwoBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveTwoBSalary(Request $request){
        
         $Nubsalary = new Twosecb();
        
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

         return redirect('/TwoBsList')->with('Message','Salary  Get');
    }



    public function TwoBsList(){
        $Twosecb = Twosecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.TwoBsList',compact('Twosecb'));

    }

     public function TwoBSalaryPrint($id){
              
              $Nuasalary = Twosecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.TwoBSalaryPrint',compact('Nuasalary'));

    }

     public function TwoBSalaryDelete(Request $request){
         
         $Twosecb = Twosecb::find($request->id);
         $Twosecb -> delete();

         return redirect('/TwoBsList')->with('Message','Salary Sheet Delete');

    }
}
