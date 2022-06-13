<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodDonate;
use App\Models\BloodGet;

class BloodDonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bloodDonate = BloodDonate::all();
        $bloodGet = BloodGet::all();
        //dd($bloodDonate->toArray());
        return view('pages.bloodDonate')->with([
            'bloodDonates' => $bloodDonate,
            'bloodGets' => $bloodGet,
        ]);
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
            'dooner_name' => 'required',
            'blood_type'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $bloodDonate =new BloodDonate;
        $bloodDonate->doonerName = $request->dooner_name;
        $bloodDonate->BloodType = $request->blood_type;
        $bloodDonate->contact= $request->contact;
        $bloodDonate->healthStatus= $request->health_status;
        $bloodDonate->presentAddrress = $request->present_address;
        $bloodDonate->permanentAddress = $request->permanent_address;
        if(isset($request->image)){
            $imageName = time().$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $bloodDonate->image = $imageName;
        }

        $bloodDonate->save();
        return redirect()->back()->with([
            'success' => 'Data Saved'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
