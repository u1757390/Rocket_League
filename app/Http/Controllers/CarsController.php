<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function index()
    {
        $cars = Cars::all ();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view ('cars.create');
    }

    public function store(Request $request)
    {

        request () -> validate ([
            'name' => 'required|min:2|max:32',
            'rarity' => 'required|min:2|max:32',
            'colour' => 'required|min:2|max:32'
        ]);

        $attributes = $request -> all (
            'name',
            'rarity',
            'colour'
        );

        $cars = cars::create ($attributes);

        return redirect ($cars -> path);

    }

    public function show(Cars $cars)
    {
        return view ('cars.show', compact('cars'));
    }

    public function edit(Cars $cars)
    {
        return view ('cars.edit', compact ('cars'));
    }

    public function update(Request $request, Cars $cars)
    {

        $attributes = request () -> validate ([
            'name' => 'required|min:2|max:32',
            'rarity' => 'required|min:2|max:32',
            'colour' => 'required|min:2|max:32'
        ]);

        $cars -> update ($attributes);

        return redirect ('/');
    }

    public function destroy(Cars $cars)
    {
        $cars -> delete ();

        return redirect('/');
    }
}
