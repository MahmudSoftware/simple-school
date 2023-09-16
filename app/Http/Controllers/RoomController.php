<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function RoomCreate(){
           
        return view('Admin.Room.RoomCreate');

    }

     public function SaveRoom(Request $request){
         
         $Room = new Room();
         $Room->RoomNameNo = $request->RoomNameNo;
         $Room->Description = $request->Description;
        
         $Room -> save();

         return redirect('/RoomCreate')->with('Message','Room Saved');
    }

    public function ViewRoom(){
           $Room = Room::orderBy('RoomNameNo','ASC')
                   ->get();
        return view('Admin.Room.ViewRoom',compact('Room'));

    }


    public function DeleteRoom(Request $request){

         
         $Room = Room::find($request->id);
         $Room->delete();

         return redirect('/ViewRoom')->with('Message','Room Delete');
    }
}
