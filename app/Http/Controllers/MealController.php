<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Vendor;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('meal.index_meal', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        return view('meal.create_meal', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mealStore = $request->all();
        /*
        if($request->hasFile('image')){ 
            $image=$request->file('image');
            // Storage::makeDirectory('public', 777, true);
            // $path=$image->store('images/meals', ['disk' => 'public']);
            $path=$image->store('', ['disk' => 'public']);
            $mealStore['image']=$path;
        }
        */
        $meal = new Meal($request->all());
        if($request->hasFile('image')){ 
            $destination_path ='public/images/meals';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $meal['image']=$image_name;
            }


        if ($meal->save())
            return to_route('meals.index')->with('success', 'Meal created successfully');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        $vendors = Vendor::all();
        return view('meal.edit_meal', compact('meal', 'vendors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->all());
        if($request->hasFile('image')){ 
            $destination_path ='public/images/meals';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $meal['image']=$image_name;
            }

        if ($meal->save())
        return to_route('meals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meal::destroy($id);
        return back()->with('success', 'Meal has been deleted successfully');
    }
}
