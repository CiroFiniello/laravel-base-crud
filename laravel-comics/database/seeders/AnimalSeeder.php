<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $animals = [
            [
                "title" => "Lion",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/36843/lion-panthera-leo-lioness-animal-world.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Penguin",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/86405/penguin-funny-blue-water-86405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Elephant",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/1054666/pexels-photo-1054666.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Tiger",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg"
            ],
            [
                "title" => "Koala",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/2610309/pexels-photo-2610309.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Peacock",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/45911/peacock-plumage-bird-peafowl-45911.jpeg"
            ],
            [
                "title" => "Rabbit",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/326012/pexels-photo-326012.jpeg"
            ],
            [
                "title" => "Panda",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/3608263/pexels-photo-3608263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Horse",
                "category" => "Farm Animals",
                "image_url" => "https://images.pexels.com/photos/1996333/pexels-photo-1996333.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "title" => "Dog",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/1805164/pexels-photo-1805164.jpeg"
            ],
            [
                "title" => "Cat",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/320014/pexels-photo-320014.jpeg"
            ],
            [
                "title" => "Parrot",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/1463295/pexels-photo-1463295.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
        ];

        foreach ($animals as $animalData) {
            $newAnimal = new Animal();
            $newAnimal->title = $animalData['title'];
            $newAnimal->category = $animalData['category'];
            $newAnimal->image_url = $animalData['image_url'];
            $newAnimal ->save();
        }
    }
}
