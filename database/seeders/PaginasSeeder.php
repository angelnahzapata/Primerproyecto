<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Jorge Ucan May';
        $user->email = 'jorgeucan@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
    }
}
