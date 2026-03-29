<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    // public function index()
    // {
    //     $cars = Car::all();

    //     return view('cars', [
    //         'title' => 'Favorite Cars',
    //         'cars' => $cars,
    //     ]);
    // }

    public function index(Request $request) {
        $query = Car::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('type', 'like', '%' . $request->search . '%');
            });
        }

        $cars = $query->latest()->paginate(4)->withQueryString();

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
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Car::create($validated);

        return redirect()->route('cars')->with('success', 'Car added successfully!');
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
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $car->update($validated);

        return redirect()->route('cars')->with('success', 'Car edited successfully!');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars')->with('success', 'Car deleted successfully!');
    }
}

