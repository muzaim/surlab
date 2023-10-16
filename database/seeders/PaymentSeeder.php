<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payments')->insert([
            'name' => 'Ovo',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'Bank',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'Flip',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'Gopay',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'Shopeepay',
            'created_at' => now()
        ]);
    }
}
