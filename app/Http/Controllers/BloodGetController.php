<?php

namespace App\Http\Controllers;

use App\Models\BloodGet;
use Illuminate\Http\Request;

class BloodGetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bloodDonate = BloodGet::all();
        //$bloodDonate = BloodDonate::all();
        //dd($bloodDonate->toArray());
        return view('pages.bloodDonate')->with([
            'bloodGets' => $bloodDonate,
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
            'receiver_name' => 'required',
            'blood_type'=> 'required',
            'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $bloodget =new BloodGet;
        $bloodget->patiernName = $request->receiver_name;
        $bloodget->BloodType = $request->blood_type;
        $bloodget->contact = $request->contact;
        $bloodget->healthProblems = $request->health_problem;
        $bloodget->typeOfNecessity = $request->type_of_necessity;
        $bloodget->hospitalAddrress = $request->hospital_addrress;
        if(isset($request->image)){
            $imageName = time().$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $bloodget->image = $imageName;
        }

        $bloodget->save();
        return redirect()->back()->with([
            'success' => 'Data Saved'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bloodGet  $bloodGet
     * @return \Illuminate\Http\Response
     */
    public function show(bloodGet $bloodGet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bloodGet  $bloodGet
     * @return \Illuminate\Http\Response
     */
    public function edit(bloodGet $bloodGet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bloodGet  $bloodGet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bloodGet $bloodGet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bloodGet  $bloodGet
     * @return \Illuminate\Http\Response
     */
    public function destroy(bloodGet $bloodGet)
    {
        //
    }
}
