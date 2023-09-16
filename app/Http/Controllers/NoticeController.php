<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    public function NoticesBord(){

    	return view('Admin.Notice.NoticesBord');
    }

     public function SaveNotice(Request $request){
         
         $Notice = new Notice();
         $Notice->Date = $request->Date;
         $Notice->NiticeTitle = $request->NiticeTitle;
         $Notice->Description = $request->Description;
        
         
         $Notice -> save(); 

         return redirect('/ViewNoticesBord')->with('Message','Notice Saved');
    }

    public function ViewNoticesBord(){
        $Notice = Notice::orderBy('id','DESC')
                ->get();
    	return view('Admin.Notice.ViewNoticesBord',compact('Notice'));
    }

     public function NoticeBoardPrint(Request $request){

             $Notice = Notice::find($request->id)
                        ->first();

        return view('Admin.Notice.NoticeBoardPrint',compact('Notice'));
    }

     public function NoticeBoardDelete(Request $request){
         
         $Notice = Notice::find($request->id);
         $Notice->delete();

         return redirect('/ViewNoticesBord')->with('Message','Notice Delete');

    }
}
