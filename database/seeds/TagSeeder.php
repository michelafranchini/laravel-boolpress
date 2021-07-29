<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
use App\Tag; 

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["sport", "food", "scarpe", "accessori", "videogames", "informatica"]; 

        foreach ($tags as $tag) {
            $newTag = new Tag(); 
            $newTag->name = $tag; 
            $newTag->slug = Str::slug($tag, '-');

            $newTag->save(); 
        }
    }
}
