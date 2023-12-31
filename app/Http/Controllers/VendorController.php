<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\VendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('vendor.index_vendor', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create_vendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorRequest $request)
    {
        $vendor = new Vendor($request->all());
        if ($vendor->save())
            return to_route('vendors.index')->with('success', 'Vendor created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendors = Vendor::with('meal')->where('id', $id)->get();
        // die(var_dump($vendors[0]->meal));
        return view('vendor.show_vendor', compact('vendors'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('vendor.edit_vendor', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendorRequest $request, Vendor $vendor)
    {
        if ($vendor->update($request->all()))
        return to_route('vendors.index')->with('success', 'Vendor has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Vendor::destroy($id);
        $vendor = Vendor::find($id);
        if ($vendor->meal()->count() > 0) {
            return back()->with("error", "Can't delete this vendor, there are related meals to this vendor");
        }
        $vendor->delete();
        return back()->with('success', 'Vendor has been deleted successfully');
    }
}
