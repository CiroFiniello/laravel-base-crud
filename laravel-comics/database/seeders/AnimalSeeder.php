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
                "image_url" => "https://images.pexels.com/photos/247502/pexels-photo-247502.jpeg"
            ],
            [
                "title" => "Elephant",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/66998/elephant-cub-tsavo-kenya-66998.jpeg"
            ],
            [
                "title" => "Penguin",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/257036/pexels-photo-257036.jpeg"
            ],
            [
                "title" => "Tiger",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/46251/tiger-head-face-wildcat-46251.jpeg"
            ],
            [
                "title" => "Koala",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/2220330/pexels-photo-2220330.jpeg"
            ],
            [
                "title" => "Peacock",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/45910/peacock-bird-spring-animal-45910.jpeg"
            ],
            [
                "title" => "Rabbit",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/235449/pexels-photo-235449.jpeg"
            ],
            [
                "title" => "Panda",
                "category" => "Wildlife",
                "image_url" => "https://images.pexels.com/photos/270053/pexels-photo-270053.jpeg"
            ],
            [
                "title" => "Horse",
                "category" => "Farm Animals",
                "image_url" => "https://images.pexels.com/photos/52500/horse-herd-fog-nature-52500.jpeg"
            ],
            [
                "title" => "Dog",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/336172/pexels-photo-336172.jpeg"
            ],
            [
                "title" => "Cat",
                "category" => "Pets",
                "image_url" => "https://images.pexels.com/photos/320014/pexels-photo-320014.jpeg"
            ],
            [
                "title" => "Parrot",
                "category" => "Birds",
                "image_url" => "https://images.pexels.com/photos/33152/amazon-parrot-parrot-bird-scream.jpg"
            ],
        ];
        foreach ($animals as $animalData) {
            $newAnimal = new Animal();
            $newAnimal->title = $animalData['title'];
            $newAnimal->category = $animalData['category'];
            $newAnimal->title = $animalData['title'];
            $newAnimal ->save();
        }
    }
}
