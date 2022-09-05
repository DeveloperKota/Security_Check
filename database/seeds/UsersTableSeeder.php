<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'id' => 1,
        'company_name' => '県立花子',
        'email' => 'hana-gcv@yamanashi-ken.ac.jp',
        'score' => 20,
        ]);
    }
}
