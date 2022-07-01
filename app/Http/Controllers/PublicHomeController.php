<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetMedicine;
use App\Models\BloodDonate;
use App\Models\BloodGet;

class PublicHomeController extends Controller
{
    public function publicHome(){
        $medicineNumber = GetMedicine::all()->count();
        $BloodDonatedNumber = BloodDonate::count();
        $BloodGetNumber = BloodGet::all()->count();

        // dd($medicineNumber);
        return view('pages.publicHome')->with([
            'medicineNumber' => $medicineNumber,
            'DonatedBloodNumber' => $BloodDonatedNumber,
            'ServicedBloodNumber' => $BloodGetNumber,
        ]);
    }
}
