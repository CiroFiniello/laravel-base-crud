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
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal) // Corretto parametro singolare
    {
        return view('animals.show', compact('animal'));
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

        $newAnimal = new Animal();
        $newAnimal->title = $data['name'];
        $newAnimal->category = $data['animalCategory'];
        $newAnimal->image_url = $data['animalImage'];
        $newAnimal->save();

        return redirect()->route('animals.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();

        $animal->title = $data['name'];
        $animal->category = $data['animalCategory'];
        $animal->image_url = $data['animalImage'];
        $animal->update();

        return redirect()->route('animals.index')->with('success', 'Animal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index')->with('success', 'Animal deleted successfully.');
    }
}
