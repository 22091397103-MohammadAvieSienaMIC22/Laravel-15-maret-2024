<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contact;
use App\Models\post;

class Databaseseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        post::create([
            'Id' => '1',
            'username' => 'avie',
            'password' => '1234567'
        ]);

        contact::create([
            'first_name' => 'avie',
            'last_name' => 'siena',
            'email' => 'aviesiena@gmail.com',
            'phone' => '082346451'
        ]);
    }
}
