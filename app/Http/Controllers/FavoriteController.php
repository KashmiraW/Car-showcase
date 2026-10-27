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

        $loginDays = \App\Models\LoginHistory::where('user_id', $user->id)
            ->distinct()
            ->count(\Illuminate\Support\Facades\DB::raw('DATE(logged_in_at)'));

        if ($user->role !== 'admin' && $loginDays < 3) {
            return back()->with('error', 'You must log in on at least 3 different days before adding favorites.');
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
