<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarData;


class GivebackController extends Controller
{
    
    public function index()
    {
        return view('pages.giveback.create');
    }

   
    public function store(Request $request)
    {        
        $data = $request->all();
        $plat_no = $data['plat_no'];
               
        $cars = CarData::findOrFail($plat_no);

        dd($plat_no);

        // return redirect()->route('pages.giveback.edit');
        return view('pages.giveback.edit', compact('cars'));

    }

}
