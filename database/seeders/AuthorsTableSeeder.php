<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-01-11 10:32:40',
                'updated_at' => '2021-09-04 12:50:31',
                'first_name' => 'Ebony',
                'last_name' => 'Evans',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2020-07-21 19:11:32',
                'updated_at' => '2021-08-10 06:38:34',
                'first_name' => 'Theda',
                'last_name' => 'Munn',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-09-01 12:52:05',
                'updated_at' => '2021-09-01 12:52:05',
                'first_name' => 'Jeffery',
                'last_name' => 'Grimes',
            ),
        ));
        
        
    }
}