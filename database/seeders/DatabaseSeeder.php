<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
       // Hapus data sebelumnya jika ada (opsional)
       DB::table('users')->truncate();

       // Data pengguna awal
       DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'role' => 0,
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'created_at' => now(),
        'updated_at' => now(),
       ]);
       DB::table('users')->insert([
        'name' => 'lite',
        'email' => 'litetik382@gmail.com',
        'role' => 1,
        'email_verified_at' => now(),
        'password' => Hash::make('lite382'),
        'created_at' => now(),
        'updated_at' => now(),
       ]);
    }
}