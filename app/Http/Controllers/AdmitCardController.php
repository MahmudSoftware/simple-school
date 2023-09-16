<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admit;
use App\Examtype;
use DB;

class AdmitCardController extends Controller
{
    public function CreateAdmitCard(){

    	return view('Admin.AdmitCard.SearchAdmitCard');
    }

     public function AdmitSearch(Request $request)
    {	


    	$AdmitCard = DB::table('students')
    				->where('StudentId', 'LIKE', '%'.$request->AdmitCardResult.'%')
    				->Orwhere('MobileNumber', 'LIKE', '%'.$request->AdmitCardResult.'%')
    				->first();
               
                if ($AdmitCard == false) {
                 
        return redirect('/CreateAdmitCard')->with('Message','Admit Card Not Found');
                
                  } 
                 else {


    	 $Examtype = Examtype::orderBy('Examtype','ASC')
                    ->get();
                    
    	return view('Admin.AdmitCard.CreateAdmitCard', compact('AdmitCard','Examtype'));
   } }

   

    public function CreateIDCard(){

    	return view('Admin.IDCard.CreateIDCard');
    }


     public function IdCardSearch(Request $request)
    {	
    	$IdCardSearch = DB::table('students')
    				->where('StudentId', 'LIKE', '%'.$request->IdCardResult.'%')
    				->Orwhere('MobileNumber', 'LIKE', '%'.$request->IdCardResult.'%')
    				->first();

                     if ($IdCardSearch == false) {
                 
        return redirect('/CreateIDCard')->with('Message','Id  Card Not Found');
                
                  } 
                  
                 else {

    	
    	return view('Admin.IDCard.ShowIdCard', compact('IdCardSearch'));
    } }

    public function SaveAdmitCard(Request $request){


         $Admit = new Admit();
         $Admit->StudentID = $request->StudentID;
         $Admit->StudentName = $request->StudentName;
         $Admit->FathersName = $request->FathersName;
         $Admit->MobileNumber = $request->MobileNumber;
         $Admit->Class = $request->Class;
         $Admit->Roll = $request->Roll;
         $Admit->Address = $request->Address;
         $Admit->Photo = $request->Photo;
         $Admit->ExamType = $request->ExamType;
         
         $Admit -> save();

         return redirect('/AdmitCardList')->with('Message','Admit Saved');
    }

    public function AdmitCardList(){
           $Admit = Admit::orderBy('id','DESC')
                   ->get();
        return view('Admin.AdmitCard.AdmitCardList',compact('Admit'));
    }

    public function AdmitCardPrint($id){
        
             $Admit = Admit::where('id',$id)
                     ->first();
        return view('Admin.AdmitCard.PrintAdmitCard',compact('Admit'));
    }

      public function DeleteAdmit(Request $request){
         
         $Admit = Admit::find($request->id);
         $Admit->delete();

         return redirect('/AdmitCardList')->with('Message','Admit Delete');

    }
}
