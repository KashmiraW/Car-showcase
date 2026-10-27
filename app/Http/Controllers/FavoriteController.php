<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class FavoriteController extends Controller
{
    public function index()
    {
        $cars = auth()->user()->favoriteCars()->get();

        return view('favorites', ['cars' => $cars, 'title' => 'My Favorites']);
    }

    public function store(Car $car)
    {
        $user = auth()->user();

        if ($user->role !== 'admin' && $user->login_count < 3) {
            return back()->with('error', 'You must log in at least 3 times before adding favorites.');
        }

        $user->favoriteCars()->syncWithoutDetaching([$car->id]);
        return back()->with('success', 'Car added to favorites!');
    }

    public function destroy(Car $car)
    {
        auth()->user()->favoriteCars()->detach($car->id);

        return back()->with('success', 'Car removed from favorites!');
    }
}
