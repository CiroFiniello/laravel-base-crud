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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'animalCategory' => 'required|string|max:255',
            'animalImage' => 'required|url|max:255',
        ]);

        $newAnimal = new Animal();
        $newAnimal->title = $validatedData['name'];
        $newAnimal->category = $validatedData['animalCategory'];
        $newAnimal->image_url = $validatedData['animalImage'];
        $newAnimal->save();

        return redirect()->route('animals.index')->with('success', 'Animal created successfully.');

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'animalCategory' => 'required|string|max:255',
            'animalImage' => 'required|url|max:255',
        ]);

        $animal->title = $validatedData['name'];
        $animal->category = $validatedData['animalCategory'];
        $animal->image_url = $validatedData['animalImage'];
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
