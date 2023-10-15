<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Nadia Varayandita Ingrida',
            'image' => 'nadia.jpg',
            'email' => 'nadiavarra@gmail.com',
            'password' => '$2y$10$4qg2XXISkIyQY7N9wlIFS.cR8w/qd5qobZw5iCZztLS3BDxzWUZ3a',
            'remember_token' => 'e6xSZjyn0vHnU6L1QyD9NA4gWm1AxYgTeIJDXYUre0aEXa4UuNPo2RZRld0K',
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Haikal Kurniawan',
            'image' => 'haikal.jpg',
            'email' => 'haikal@gmail.com',
            'password' => '$2y$10$4qg2XXISkIyQY7N9wlIFS.cR8w/qd5qobZw5iCZztLS3BDxzWUZ3a',
            'remember_token' => 'e6xSZjyn0vHnU6L1QyD9NA4gWm1AxYgTeIJDXYUre0aEXa4UuNPo2RZRld0K',
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Randy Sutejo',
            'image' => 'randy.jpg',
            'email' => 'randy@gmail.com',
            'password' => '$2y$10$4qg2XXISkIyQY7N9wlIFS.cR8w/qd5qobZw5iCZztLS3BDxzWUZ3a',
            'remember_token' => 'e6xSZjyn0vHnU6L1QyD9NA4gWm1AxYgTeIJDXYUre0aEXa4UuNPo2RZRld0K',
            'created_at' => now()
        ]);
    }
}
