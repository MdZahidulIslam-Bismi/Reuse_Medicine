<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DeshboardDeliveryController extends Controller
{
    
    public function DeshboardDelivery(){
        return view('pages.dashboardDelevery');
    }
}
