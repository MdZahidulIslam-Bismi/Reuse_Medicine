<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardDeleveryMenController extends Controller
{
    public function deleveryMen(){
        
        // dd($medicineNumber);
        return view('pages.dashboardDeleveryMen')->with([
            
        ]);
    }
}
