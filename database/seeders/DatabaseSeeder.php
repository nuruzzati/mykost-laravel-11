<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kost;
use App\Models\Penghuni;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $password = '123';
      User::factory()->create([
            'name' => 'chaerunnisa',
            'email' => 'chae@gmail.com',
            'password' => Hash::make($password),
        ]);

        // penghuni
        Penghuni::create([
            'nama' => 'chae',
            'telepon' => '089665004267',
            'kelamin' => 'perempuan'
        ]);
        Penghuni::create([
            'nama' => 'rizki',
            'telepon' => '089665004267',
            'kelamin' => 'laki-laki'
        ]);
        Penghuni::create([
            'nama' => 'rahman',
            'telepon' => '089665004267',
            'kelamin' => 'laki-laki'
        ]);
        Penghuni::create([
            'nama' => 'azka',
            'telepon' => '089665004267',
            'kelamin' => 'perempuan'
        ]);
    }
}
