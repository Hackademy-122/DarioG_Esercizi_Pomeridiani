<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $genres=['Rock','Pop','Indie','Metal','Funk','Sanremo','Antonio'];

        foreach($genres as $genre){
            DB::table('genres')->insert([
                'name'=>$genre,
            ]);
    }
}
}