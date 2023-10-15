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
            'name' => 'ovo',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'bank',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'flip',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'gopay',
            'created_at' => now()
        ]);

        DB::table('payments')->insert([
            'name' => 'shopeepay',
            'created_at' => now()
        ]);
    }
}
