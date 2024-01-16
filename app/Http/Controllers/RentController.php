<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rent;


class RentController extends Controller
{
    public function index(Request $request)
    {
        
        
        //$rents = \App\Models\Rent::paginate(5);
        
        
        // $carDatas = DB::table('car_data')
        //     ->when($request->input('name'), function ($query, $name) {
        //         return $query->where('merk', 'like', '%' . $name . '%')
        //                      ->orWhere('model', 'like', "%". $name . '%');
        //     })
        //     ->paginate(5);
        $rents = DB::table('rents')
                ->join('car_data', 'rents.car_data_id', '=', 'car_data.id')
                ->join('users', 'rents.user_id', '=', 'users.id')
                ->select('rents.*', 'car_data.model  AS car_model', 'car_data.plat_no  AS car_plat', 'users.name AS user_name')
                ->when($request->input('name'), function ($query, $name) {
                    return $query->where('car_data.model', 'like', '%' . $name . '%');
                })
                ->paginate(5);

                  
        return view('pages.rent.index', compact('rents'));
    }

    //create
    public function create()
    {
        $rents = \App\Models\Rent::all();
        $carDatas = \App\Models\CarData::all();
        $users = \App\Models\User::all();
        return view('pages.rent.create', compact('rents','carDatas','users'));
    }

    //store
    public function store(Request $request)
    {           
        // $data = $request->all();
        // Rent::create($data);

        $rent = new \App\Models\Rent;

        $rent->date_start = $request->date_start;
        $rent->date_end = $request->date_end;
        $rent->car_data_id = $request->car_data_id;
        $rent->user_id = $request->user_id;

       
        $rent->save();
        return redirect()->route('rent.index')->with('success', 'Rent Car successfully created');
    }

    public function edit($id)
    {
        $rent = Rent::findOrFail($id);
        $carDatas = \App\Models\CarData::all();
        $users = \App\Models\User::all();
        return view('pages.rent.edit', compact('rent','carDatas','users'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $rent = Rent::findOrFail($id);
       
        $rent->update($data);
        return redirect()->route('rent.index')->with('success', 'Rent successfully updated');

    }

    //destroy
    public function destroy($id)
    {
        $rent = Rent::findOrFail($id);
        $rent->delete();
        return redirect()->route('rent.index')->with('success', 'Rent Car successfully deleted');

    }
}
