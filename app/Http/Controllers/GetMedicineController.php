<?php

namespace App\Http\Controllers;

use App\Models\GetMedicine;
use Illuminate\Http\Request;

class GetMedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getMedicines = GetMedicine::All();
        return view('pages.getMedicine')->with([
            'getMedicines' => $getMedicines
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
        //
        $this->validate($request,[
            'medicine_name' => 'required',
            'medecine_quantity'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $getMedicine =new GetMedicine;
        $getMedicine->receiverName = $request->receiver_name;
        $getMedicine->reason = $request->reason;
        $getMedicine->medicineName= $request->medicine_name;
        $getMedicine->medecineQuantity = $request->medicine_quantity;
        $getMedicine->cost = $request->cost;
        $getMedicine->quantity = $request->quantity;
        $getMedicine->receiverAddress= $request->receiver_address;
        if(isset($request->image)){
            $imageName = time().$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $getMedicine->image = $imageName;
        }

        $getMedicine->save();
        return redirect()->back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\getMedicine  $getMedicine
     * @return \Illuminate\Http\Response
     */
    public function show(getMedicine $getMedicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\getMedicine  $getMedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(getMedicine $getMedicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\getMedicine  $getMedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, getMedicine $getMedicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\getMedicine  $getMedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(getMedicine $getMedicine)
    {
        //
    }
}
