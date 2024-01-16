<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\CarData;

class CarDataController extends Controller
{
    public function index(Request $request)
    {
        
        
        //$carDatas = \App\Models\CarData::paginate(5);
        
        
        $carDatas = DB::table('car_data')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('merk', 'like', '%' . $name . '%')
                             ->orWhere('model', 'like', "%". $name . '%');
            })
            ->paginate(5);

                  
        return view('pages.car_data.index', compact('carDatas'));
    }

    //create
    public function create()
    {
        $carDatas = \App\Models\CarData::all();
        return view('pages.car_data.create', compact('carDatas'));
    }

    //store
    public function store(Request $request)
    {           
        $data = $request->all();
        CarData::create($data);
        return redirect()->route('car_data.index')->with('success', 'Car successfully created');
    }

    public function edit($id)
    {
        $carData = CarData::findOrFail($id);
        return view('pages.car_data.edit', compact('carData'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $carData = CarData::findOrFail($id);
       
        $carData->update($data);
        return redirect()->route('car_data.index')->with('success', 'Car successfully updated');

    }

    //destroy
    public function destroy($id)
    {
        $carData = CarData::findOrFail($id);
        $carData->delete();
        return redirect()->route('car_data.index')->with('success', 'Car successfully deleted');

    }
}
