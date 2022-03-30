<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++)
        {
            DB::table('antrians')->insert([
                'poli' => 1,
                'nama' => $faker->name,
                'tanggal' => date('Y-m-d', strtotime('+1 day')),
                'nomor' => $i,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        for($i = 1; $i <= 3; $i++)
        {
            DB::table('antrians')->insert([
                'poli' => 2,
                'nama' => $faker->name,
                'tanggal' => date('Y-m-d', strtotime('+1 day')),
                'nomor' => $i,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        for($i = 1; $i <= 4; $i++)
        {
            DB::table('antrians')->insert([
                'poli' => 3,
                'nama' => $faker->name,
                'tanggal' => date('Y-m-d', strtotime('+1 day')),
                'nomor' => $i,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
