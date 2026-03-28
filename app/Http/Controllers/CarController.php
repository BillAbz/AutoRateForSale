<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars', [
            'title' => 'Favorite Cars',
            'cars' => $cars,
        ]);
    }

    public function create()
    {
        return view('cars.create', [
            'title' => 'Add Car',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'type' => 'required|min:2',
            'description' => 'required|min:10',
        ]);

        Car::create($validated);

        return redirect()->route('cars');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('cars.edit', [
            'title' => 'Edit Car',
            'car' => $car,
        ]);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|min:2',
            'type' => 'required|min:2',
            'description' => 'required|min:10',
            'image' => 'nullable|url',
        ]);

        $car->update($validated);

        return redirect()->route('cars');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars');
    }
}

