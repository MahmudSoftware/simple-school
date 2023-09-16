<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fourseca;
use App\Foursecb;

class ClassFourController extends Controller
{
     public function FourASalary(){

              $Student = Student::where('Class','STD-Four-Section-A')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.FourAsListAll',compact('Student'));

    }

     public function FourAPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Fourseca::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.FourAPaySalary',compact('Student','Nuasalary'));

    }

     public function SaveFourASalary(Request $request){
        
         $PsbSalary = new Fourseca();
        
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

         return redirect('/FourAsList')->with('Message','Salary  Get');
    }

    public function FourAsList(){
        $Oneseca = Fourseca::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.FourAsList',compact('Oneseca'));

    }

     public function FourASalaryPrint($id){
              
              $Nuasalary = Fourseca::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.FourASalaryPrint',compact('Nuasalary'));

    }

     public function FourASalaryDelete(Request $request){
         
         $Fourseca = Fourseca::find($request->id);
         $Fourseca->delete();

         return redirect('/FourAsList')->with('Message','Salary Sheet Delete');

    }








    public function FourBSalary(){

              $Student = Student::where('Class','Four-Section-B')
                         ->orderBy('Roll','ASC')
                         ->get(); 
              
        return view('Admin.Salary.FourBSalaryAll',compact('Student'));

    }

    public function FourBPaySalary($id){
              $Student = Student::where('id',$id)
                        ->first();
             $Nuasalary = Foursecb::orderBy('Roll','ASC')
                        ->get();
        return view('Admin.Salary.FourBPaySalary',compact('Student','Nuasalary'));

    }

    public function SaveFourBSalary(Request $request){
        
         $Nubsalary = new Foursecb();
        
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

         return redirect('/FourBsList')->with('Message','Salary  Get');
    }



    public function FourBsList(){
        $Foursecb = Foursecb::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.FourBsList',compact('Foursecb'));

    }

     public function FourBSalaryPrint($id){
              
              $Nuasalary = Foursecb::where('id',$id)
                        ->first();
       
        return view('Admin.Salary.FourBSalaryPrint',compact('Nuasalary'));

    }

     public function FourBSalaryDelete(Request $request){
         
         $Foursecb = Foursecb::find($request->id);
         $Foursecb -> delete();

         return redirect('/FourBsList')->with('Message','Salary Sheet Delete');

    }
}
