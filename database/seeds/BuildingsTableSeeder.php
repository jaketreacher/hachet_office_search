<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('database/seeds/data/office-data.csv', 'r');

        while(! feof($file))
        {
            $data = fgetcsv($file);
            DB::table('buildings')->insert([
                'name' => $data[0],
                'price' => $data[1],
                'offices' => $data[2],
                'tables' => $data[3],
                'sqm' => $data[4],
            ]);
        }
    }
}
