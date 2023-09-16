<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Kgseca;
use App\Kgsecb;

class KgController extends Controller
{
    public function KgASalary(){

              $Student = Student::where('Class','KG-Section-A')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.KgASalaryAll',compact('Student'));

    }

     public function KgAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Kgseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.KgASalary',compact('Student','Nuasalary'));

    }

     public function SaveKgASalary(Request $request){
        
         $PsbSalary = new Kgseca();
        
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

         return redirect('/KgAsList')->with('Message','Salary  Get');
    }

    public function KgAsList(){
        $Nuasalary = Kgseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.KgAsList',compact('Nuasalary'));

    }

     public function KgASalaryPrint($id){
              
              $Nuasalary = Kgseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.KgASalaryPrint',compact('Nuasalary'));

    }

     public function KgaSalaryDelete(Request $request){
         
         $Kgseca = Kgseca::find($request->id);
         $Kgseca->delete();

         return redirect('/KgAsList')->with('Message','Salary Sheet Delete');

    }





    public function KgBSalary(){

              $Student = Student::where('Class','KG-Section-B')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.KgBSalaryAll',compact('Student'));

    }

    public function KgBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Kgsecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.KgBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveKgBSalary(Request $request){
        
         $Nubsalary = new Kgsecb();
        
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

         return redirect('/KgBsList')->with('Message','Salary  Get');
    }



    public function KgBsList(){
        $Nuasalary = Kgsecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.KgBsList',compact('Nuasalary'));

    }

     public function KgBSalaryPrint($id){
              
              $Nuasalary = Kgsecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.KgBSalaryPrint',compact('Nuasalary'));

    }

     public function KgBSalaryDelete(Request $request){
         
         $Kgsecb = Kgsecb::find($request->id);
         $Kgsecb -> delete();

         return redirect('/KgBsList')->with('Message','Salary Sheet Delete');

    }
}
