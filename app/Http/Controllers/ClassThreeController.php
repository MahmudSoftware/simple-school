<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Threeseca;
use App\Threesecb;

class ClassThreeController extends Controller
{
     public function ThreeASalary(){

              $Student = Student::where('Class','STD-Three-Section-A')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.ThreeASalaryAll',compact('Student'));

    }

     public function ThreeAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Threeseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.ThreeAPaySalary',compact('Student','Nuasalary'));

    }

     public function SaveThreeASalary(Request $request){
        
         $PsbSalary = new Threeseca();
        
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

         return redirect('/ThreeAsList')->with('Message','Salary  Get');
    }

    public function ThreeAsList(){
        $Threeseca = Threeseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.ThreeAsList',compact('Threeseca'));

    }

     public function ThreeASalaryPrint($id){
              
              $Nuasalary = Threeseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.ThreeASalaryPrint',compact('Nuasalary'));

    }

     public function ThreeASalaryDelete(Request $request){
         
         $Oneseca = Threeseca::find($request->id);
         $Oneseca->delete();

         return redirect('/ThreeAsList')->with('Message','Salary Sheet Delete');

    }








    public function ThreeBSalary(){

              $Student = Student::where('Class','Three-Section-B')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.ThreeBsListAll',compact('Student'));

    }

    public function ThreeBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Threesecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.ThreeBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveThreeBSalary(Request $request){
        
         $Nubsalary = new Threesecb();
        
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

         return redirect('/ThreeBsList')->with('Message','Salary  Get');
    }



    public function ThreeBsList(){
        $Threesecb = Threesecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.ThreeBsList',compact('Threesecb'));

    }

     public function ThreeBSalaryPrint($id){
              
              $Nuasalary = Threesecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.ThreeBSalaryPrint',compact('Nuasalary'));

    }

     public function ThreeBSalaryDelete(Request $request){
         
         $Threesecb = Threesecb::find($request->id);
         $Threesecb -> delete();

         return redirect('/ThreeBsList')->with('Message','Salary Sheet Delete');

    }
}
