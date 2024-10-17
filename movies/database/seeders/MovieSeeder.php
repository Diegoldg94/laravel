<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        // Esto eliminará todos los registros existentes en la tabla antes de insertar nuevos
        DB::table('movies')->truncate();

        // Definimos los registros de las películas
        $movies = [
            [
                'title' => 'El Padrino',
                'synopsis' => 'El envejecido patriarca de una dinastía del crimen organizado transfiere el control de su imperio clandestino a su hijo reacio.',
                'year' => 1972,
                'cover' => 'https://example.com/covers/el-padrino.jpg',
            ],
            [
                'title' => 'Sueño de Fuga',
                'synopsis' => 'Dos hombres encarcelados se hacen amigos a lo largo de varios años, encontrando consuelo y eventual redención a través de actos de decencia común.',
                'year' => 1994,
                'cover' => 'https://example.com/covers/sueno-de-fuga.jpg',
            ],
            [
                'title' => 'La Lista de Schindler',
                'synopsis' => 'En la Polonia ocupada por los nazis, Oskar Schindler salva a sus empleados judíos de los campos de concentración.',
                'year' => 1993,
                'cover' => 'https://example.com/covers/la-lista-de-schindler.jpg',
            ],
            [
                'title' => 'El Caballero de la Noche',
                'synopsis' => 'Batman se enfrenta a su mayor enemigo, el Joker, quien causa el caos en la ciudad de Gotham.',
                'year' => 2008,
                'cover' => 'https://example.com/covers/el-caballero-de-la-noche.jpg',
            ],
            [
                'title' => 'Pulp Fiction',
                'synopsis' => 'La vida de dos sicarios, un boxeador y una pareja de delincuentes se entrelazan de manera inesperada en Los Ángeles.',
                'year' => 1994,
                'cover' => 'https://example.com/covers/pulp-fiction.jpg',
            ],
            [
                'title' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'synopsis' => 'Un hobbit emprende un viaje para destruir un anillo poderoso y evitar que caiga en manos del mal.',
                'year' => 2001,
                'cover' => 'https://example.com/covers/el-senor-de-los-anillos.jpg',
            ],
            [
                'title' => 'Forrest Gump',
                'synopsis' => 'La historia de un hombre con una capacidad limitada pero que logra tener una vida extraordinaria.',
                'year' => 1994,
                'cover' => 'https://example.com/covers/forrest-gump.jpg',
            ],
            [
                'title' => 'Gladiador',
                'synopsis' => 'Un general romano es traicionado y reducido a la esclavitud, y lucha para vengar a su familia.',
                'year' => 2000,
                'cover' => 'https://example.com/covers/gladiador.jpg',
            ],
            [
                'title' => 'Titanic',
                'synopsis' => 'Un romance se desarrolla a bordo del desafortunado barco Titanic mientras se dirige hacia el desastre.',
                'year' => 1997,
                'cover' => 'https://example.com/covers/titanic.jpg',
            ],
            [
                'title' => 'Matrix',
                'synopsis' => 'Un hacker descubre la verdadera naturaleza de su realidad y su papel en la guerra contra sus controladores.',
                'year' => 1999,
                'cover' => 'https://example.com/covers/matrix.jpg',
            ],
        ];

        // Inserta los registros en la tabla "movies"
        foreach ($movies as $movie) {
            DB::table('movies')->insert([
                'title' => $movie['title'],
                'synopsis' => $movie['synopsis'],
                'year' => $movie['year'],
                'cover' => $movie['cover'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
