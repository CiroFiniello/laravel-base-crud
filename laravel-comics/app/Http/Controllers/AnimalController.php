<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $animals = Animal::all();

        return view('animals.index', compact('animals'));
    }

    /**
     * Display the specified resource.
     */

    public function show(Animal $animals)
    {
        // $animals = Animal::findOrFail($id);
        return view('animals.show', compact('animals'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newAnimal = new Animal($data);
        $newAnimal->title = $data['name'];
        $newAnimal->category = $data['animalCategory'];
        $newAnimal->image_url = $data['animalImage'];
        $newAnimal ->save();



        return redirect()->route('animals.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
