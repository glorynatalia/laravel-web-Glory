<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Tambahkan ini

class CreateFirstUser extends Seeder
{
    use WithoutModelEvents; // Tambahkan ini

    /**
     * Run the database seeds.
     */
    public function run(): void // Tambahkan return type
    {
        User::create([
            'name' => 'admin',
            'email' => 'gatot@pcr.ac.id',
            'password' => Hash::make('gatotkaca')
        ]);
    }
}
