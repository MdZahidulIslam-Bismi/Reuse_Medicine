<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('pages.medicineDonate')->with([
            'medicines' => $medicines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('you are working');
        //medicine donate data store
        $this->validate($request,[
            'medicine_name' => 'required',
            'medicine_brand' => 'required',
            'medecine_quantity'=> 'required',
            'medicine_created_date'=> 'required',
            'medicine_doner_address'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $medicine =new Medicine;
        $medicine->brand_id = 5;
        $medicine->medicineName = $request->medicine_name;
        $medicine->medicineType = $request->medicine_type;
        $medicine->BrandName= $request->medicine_brand;
        $medicine->BatchId = $request->batch_id;
        $medicine->prducTionExpire = $request->medicine_created_date;
        $medicine->donerAddress = $request->medicine_doner_address;
        $medicine->quantity = $request->medecine_quantity;
        if(isset($request->image)){
            $imageName = time().$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $medicine->image = $imageName;
        }

        $medicine->save();
        return redirect()->back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
