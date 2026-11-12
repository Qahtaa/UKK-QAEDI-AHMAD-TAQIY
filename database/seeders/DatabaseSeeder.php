<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
      
User::firstOrCreate(
    ['email' => 'admin@perpus.test'],
    [
        'name' => 'admin',
        'password' => 'password',
        'role' => 'admin',
    ]
);

      
User::firstOrCreate(
    ['email' => 'siswa@perpus.test'],
    [
        'name' => 'Taqiy',
        'password' => 'password',
        'role' => 'siswa',
        'kelas' => 'XII RPL 2',
    ]
);


      Book::firstOrCreate(['title' => 'Taqiy Sigma'], ['author' => 'Taqiy juga', 'publisher' => 'Taqiy juga yg publish', 'year' => 2009, 'stock' => 10]);
      Book::firstOrCreate(['title' => 'Bumi'], ['author' => 'Tere Liye', 'publisher' => 'Gramedia','year' => 2014, 'stock' => 5]);
      Book::firstOrCreate(['title' => 'Belajar Imuts'], ['author' => 'Aco', 'publisher' => 'informatika', 'year' => 2026, 'stock' => 20]);
    }
}
