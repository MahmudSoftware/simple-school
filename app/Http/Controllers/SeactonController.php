<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SeactonController extends Controller
{
    public function CreateSection(){
           
        return view('Admin.Section.SectionCreate');

    }

     public function SaveSection(Request $request){
         
         $Section = new Section();
         $Section->SectionName = $request->SectionName;
         $Section->Description = $request->Description;
        
         $Section -> save();

         return redirect('/CreateSection')->with('Message','Section Saved');
    }

    public function ViewSection(){
           $Room = Section::orderBy('SectionName','ASC')
                   ->get();
        return view('Admin.Section.ViewSection',compact('Room'));

    }

    
}
