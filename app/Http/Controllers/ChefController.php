<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class ChefController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('chef', compact('vendors'));
    }
}
