<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactions')->insert([
            'users_id' => '1',
            'products_id' => '1',
            'address' => "Jl Ahmad Yani no 12",
            'phone' => "08847263812",
            'total' => 190000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '1',
            'products_id' => '2',
            'address' => "Jl Ir Soekarno no 61",
            'phone' => "00831645342",
            'total' => 365000,
            'payments_id' => '2',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '2',
            'products_id' => '5',
            'address' => "Jl Rambutan Gang Sawo no 27",
            'phone' => "082746128312",
            'total' => 318000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '2',
            'products_id' => '7',
            'address' => "Jl Rambutan Gang Sawo no 27",
            'phone' => "082746128312",
            'total' => 194000,
            'payments_id' => '3',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '2',
            'products_id' => '3',
            'address' => "Jl Pahlawan no 28",
            'phone' => "082746128312",
            'total' => 215000,
            'payments_id' => '4',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '2',
            'products_id' => '8',
            'address' => "Jl Pahlawan no 28",
            'phone' => "082746128312",
            'total' => 215000,
            'payments_id' => '4',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '2',
            'products_id' => '5',
            'address' => "Jl Pahlawan no 28",
            'phone' => "082746128312",
            'total' => 215000,
            'payments_id' => '4',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '8',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 234000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '1',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 190000,
            'payments_id' => '2',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '3',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 215000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '4',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 486000,
            'payments_id' => '4',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '6',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 256000,
            'payments_id' => '5',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '2',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 256000,
            'payments_id' => '5',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '3',
            'products_id' => '3',
            'address' => "Perumahan Rambutan No 23",
            'phone' => "088927124663",
            'total' => 234000,
            'payments_id' => '2',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '4',
            'products_id' => '1',
            'address' => "Apartemen Mekar Sari no 23",
            'phone' => "082645592381",
            'total' => 234000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '4',
            'products_id' => '2',
            'address' => "Apartemen Mekar Sari no 23",
            'phone' => "082645592381",
            'total' => 365000,
            'payments_id' => '3',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '4',
            'products_id' => '6',
            'address' => "Apartemen Mekar Sari no 23",
            'phone' => "082645592381",
            'total' => 256000,
            'payments_id' => '1',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '4',
            'products_id' => '4',
            'address' => "Apartemen Mekar Sari no 23",
            'phone' => "082645592381",
            'total' => 486000,
            'payments_id' => '4',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '5',
            'products_id' => '4',
            'address' => "Jl Sawojajar no 84",
            'phone' => "08739246123",
            'total' => 486000,
            'payments_id' => '5',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '5',
            'products_id' => '4',
            'address' => "Jl Sawojajar no 84",
            'phone' => "08739246123",
            'total' => 486000,
            'payments_id' => '3',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '5',
            'products_id' => '4',
            'address' => "Jl Sawojajar no 84",
            'phone' => "08739246123",
            'total' => 486000,
            'payments_id' => '2',
            'created_at' => now()
        ]);

        DB::table('transactions')->insert([
            'users_id' => '5',
            'products_id' => '5',
            'address' => "Jl Sawojajar no 84",
            'phone' => "08739246123",
            'total' => 318000,
            'payments_id' => '3',
            'created_at' => now()
        ]);
    }
}
