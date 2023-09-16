<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Nuasalary;
use App\Nubsalary;



class NursaryController extends Controller
{
    public function NuASalary(){

              $Student = Student::where('Class','Nursary-Section-Shovon')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.NuASalaryAll',compact('Student'));

    }

     public function NurAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Nuasalary::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.NuASalary',compact('Student','Nuasalary'));

    }

     public function SaveNusaryASalary(Request $request){
        
         $PsbSalary = new Nuasalary();
        
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

         return redirect('/NuASalary')->with('Message','Salary  Get');
    }

    public function NuAsList(){
        $Nuasalary = Nuasalary::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.NuAsList',compact('Nuasalary'));

    }

     public function NuasalarySalaryPrint($id){
              
              $Nuasalary = Nuasalary::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.NuasalarySalaryPrint',compact('Nuasalary'));

    }

     public function NuasalarySalaryDelete(Request $request){
         
         $Nuasalary = Nuasalary::find($request->id);
         $Nuasalary->delete();

         return redirect('/NuAsList')->with('Message','Salary Sheet Delete');

    }

    public function NuBSalary(){

              $Student = Student::where('Class','Nursary-Section-Janani')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.NuBSalaryAll',compact('Student'));

    }

    public function NurBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Nuasalary::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.NuBSalary',compact('Student','Nuasalary'));

    }

    public function SaveNusaryBSalary(Request $request){
        
         $Nubsalary = new Nubsalary();
        
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

         return redirect('/NuBsList')->with('Message','Salary  Get');
    }

    public function NuBsList(){
        $Nuasalary = Nubsalary::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.NuBsList',compact('Nuasalary'));

    }

     public function NuBsalarySalaryPrint($id){
              
              $Nuasalary = Nubsalary::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.NuasBlarySalaryPrint',compact('Nuasalary'));

    }

     public function NuBsalarySalaryDelete(Request $request){
         
         $Nuasalary = Nubsalary::find($request->id);
         $Nuasalary->delete();

         return redirect('/NuBsList')->with('Message','Salary Sheet Delete');

    }
}
