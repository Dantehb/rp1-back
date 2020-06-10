<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class SuscriptoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suscriptores')->insert([
            [
                'nombre' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => Str::random(11),
                'email' => Str::random(9).'@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => Str::random(12),
                'email' => Str::random(8).'@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'nombre' => Str::random(13),
                'email' => Str::random(7).'@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'nombre' => Str::random(10),
                'email' => Str::random(12).'@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
