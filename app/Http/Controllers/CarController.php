<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        Car::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'title' => 'required|string',
            'description' => 'required|string',
//            'brand_id' => 'required|integer',
            'image' => 'image|required'
        ]);

        $nameOfFile = $request->file('image')->storePublicly('cars', 'public');

        $car = new Car();
        $car->title = $request->input('title');
        $car->description = $request->input('description');
        $car->image = $nameOfFile;
        $car->user_id = 1;
        $car->brand_id = 1;
        $car->save();

        return redirect()-> route('cars.index')->with('success', 'Car created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $cars)
    {
        $cars->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
