<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pagina;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        /*laravel seeder para crear un nuevo usuario*/
        $user = new User();
        $user->name = 'Angel Nah Zapata';
        $user->email = 'nah845943@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        Pagina::factory(100)->create();


        //$this->call([PaginasSeeder::class]);
    }
}
