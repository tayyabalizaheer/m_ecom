<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    //
    public function index()
    {
        // dd('sd');
        $data  = City::all();
        return view('admin.city.index',compact('data'));
    }
    public function create()
    {
        return view('admin.city.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities|max:255',
            'latitude' => 'max:50',
            'longitude' => 'max:50',
            'state' => 'required|max:255',
        ]);
        $City = new City();

        $City->name = strtolower($request->name);
        $City->latitude = $request->latitude;
        $City->longitude = $request->longitude;
        $City->state = strtolower($request->state);

        $City->save();

        return redirect(route('admin.city.index'))->with('success','City Added');
    }

    public function edit($id)
    {
        $data  = City::findOrFail($id);
        return view('admin.city.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'latitude' => 'max:50',
            'longitude' => 'max:50',
            'state' => 'required|max:255',
        ]);
        $City = City::findOrFail($id);
        if(strtolower($request->name) != $City->name){
            $request->validate([
                'name' => 'required|unique:cities|max:255',
            ]);
        }
        $City->name = strtolower($request->name);
        $City->latitude = $request->latitude;
        $City->longitude = $request->longitude;
        $City->state = strtolower($request->state);

        $City->save();

        return redirect(route('admin.city.index'))->with('success','City Updated');
    }

    public function delete($id)
    {
        $data  = City::findOrFail($id)->delete();
        return redirect(route('admin.city.index'))->with('success','City Deleted');
    }
}
