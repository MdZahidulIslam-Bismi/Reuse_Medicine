<?php

namespace App\Http\Controllers;
use App\Models\GetMedicine;
use App\Models\Medicine;
use Illuminate\Http\Request;


class DeshboardDeliveryController extends Controller
{
    
    public function DeshboardDelivery(){


        $getMedicine = GetMedicine::all();
        return view('pages.dashboardDelevery')->with([
            'getMedicine' => $getMedicine,
        ]);
    }

    public function getMedicineRequest(Request $request)
    {
        $getMedicine = GetMedicine::find($request->getMedicineRequestId);
        if(isset(auth()->user()->id) && $getMedicine->request_id == NULL){
            $getMedicine->request_id = auth()->user()->id;
            $getMedicine->save();
            return redirect()->back()->with([
                'message' => 'your request is submitted',
            ]);
        } elseif(isset(auth()->user()->id) && $getMedicine->request_id != NULL) {
            return redirect()->back()->with([
                'message' => 'Already requested Please Try another one',
            ]);
        }
 
        return redirect()->back()->with([
            'message' => 'Please login before request',
        ]);
         
    }

    public function rejectGetMedicine($id)
    {
        $medicine = GetMedicine::find($id);
        $medicine->request_id = NULL;
        $medicine->approved = NULL;
        $medicine->save();
        return redirect()->back();
    }

    public function approveGetMedicine($id)
    {
        $medicine = GetMedicine::find($id);
        $medicine->approved = '2';
        $medicine->save();
        return redirect()->back();
    }

    // donate medicine

public function donateMedicineRequest(Request $request)
{
    dd(request()->all());
    $donateMedicine = Medicine::find($request->donateMedicineRequestId);
    if(isset(auth()->user()->id) && $donateMedicine->request_id == NULL){
        $donateMedicine->request_id = auth()->user()->id;
        $donateMedicine->save();
        return redirect()->back()->with([
            'message' => 'your request is submitted',
        ]);
    } elseif(isset(auth()->user()->id) && $donateMedicine->request_id != NULL) {
        return redirect()->back()->with([
            'message' => 'Already requested Please Try another one',
        ]);
    }

    return redirect()->back()->with([
        'message' => 'Please login before request',
    ]);
     
}
}



