<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // se llama el metodo cal y se le pasa la clase de donde se va a ejecutar el seeder;
        
        Curso::factory(50)->create();
        User::factory(50)->create();
    }
}
