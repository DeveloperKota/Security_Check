<?php

use Illuminate\Database\Seeder;

class SecuritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('securities')->insert([
            'id' => 1,
            'email' => 'satou-gcv@yamanashi-ken.ac.jp',
            'company_name' => 'media brain',
            'score' => 17,
        ]);
    }
}
