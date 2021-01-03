<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            
                'name' => 'Pharma Admin.',
                'email' => 'admin@pharma.com',
                'type'=>'admin',
                'password'=> bcrypt('adminpass')
            
        ]);
    }
}
