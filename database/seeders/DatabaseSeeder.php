<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;
use App\Models\Pelicula;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $director1= Director::create([
            'nombre' => 'ariel',
            'apellidos' => 'censo',
            'edad' => 22,
            'genero' => 'hombre',
            'correo' => 'ariel@gmail.com',
            'telefono' => '812972',
            'direccion' => 'santa cruz',
            'ci' => '823111'
        ]);

        $pelicula1= Pelicula::create([
            'nombre' => 'avatar',
            'categoria' => 'accion',
            'anio' => '2023',
            'descripcion' => 'apto para mayores de 18 años',
            'id_director' => $director1->id
        ]);

        $pelicula2= Pelicula::create([
            'nombre' => 'rapido furiosos 10',
            'categoria' => 'accion',
            'anio' => '2023',
            'descripcion' => 'apto para mayores de 18 años',
            'id_director' => $director1->id
        ]);

        $pelicula3= Pelicula::create([
            'nombre' => 'guardianes de la galaxia',
            'categoria' => 'accion',
            'anio' => '2023',
            'descripcion' => 'apto para mayores de 18 años',
            'id_director' => $director1->id
        ]);


    }
}
