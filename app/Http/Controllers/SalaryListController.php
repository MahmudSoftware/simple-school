<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasalary;

class SalaryListController extends Controller
{
    public function PlayAsList(){
        $Pasalary = Pasalary::orderBy('Roll','ASC')
                    ->get();      
        return view('Admin.SalaryList.PlayAsList',compact('Pasalary'));

    }
}
