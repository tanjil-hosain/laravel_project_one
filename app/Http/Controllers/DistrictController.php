<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::all();
        return view('backend.districts.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.districts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3'
        ]);

         $district =new District;

         $district->name = $request->name;

         $district->save();
        return redirect('districts')->with('success','Successfully Created a District');


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $district = District::find($id);
        return view('backend.districts.show', compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $district = District::find($id);
        return view('backend.districts.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3'
        ]);

         $district = District::find($id);

         $district->name = $request->name;

         $district->update();
        return redirect('districts')->with('success','Successfully Updated District');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);
        $district->delete();

        return redirect('districts')->with('success', 'Deleted Successfully');

    }
}
