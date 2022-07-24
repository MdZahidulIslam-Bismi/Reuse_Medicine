<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetMedicine;
use App\Models\BloodDonate;
use App\Models\BloodGet;

class PublicHomeController extends Controller
{
    public function publicHome(){
        $getMedicineNumber = GetMedicine::all()->count();
        $donateMicineNumber = GetMedicine::all()->count();
        $bloodDonatedNumber = BloodDonate::count();
        $BloodGetNumber = BloodGet::all()->count();

        // dd($medicineNumber);
        return view('pages.publicHome')->with([
            'getMedicineNumber' => $getMedicineNumber,
            'donateMicineNumber' => $donateMicineNumber,
            'DonatedBloodNumber' => $bloodDonatedNumber,
            'ServicedBloodNumber' => $BloodGetNumber,
        ]);
    }
}
