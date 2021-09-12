<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2020-11-25 16:18:20',
                'updated_at' => '2020-11-25 16:18:20',
                'title' => 'The Blade of the Stars',
                'author_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2020-04-09 04:41:31',
                'updated_at' => '2020-04-09 04:41:31',
                'title' => 'The Voices of Other Earths',
                'author_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-08-09 16:34:41',
                'updated_at' => '2021-08-09 16:34:41',
                'title' => 'The Rise of the Whale Prince',
                'author_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2020-04-14 09:17:27',
                'updated_at' => '2020-04-14 09:17:27',
                'title' => 'The Bones Never Lie',
                'author_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-09-01 09:34:13',
                'updated_at' => '2021-09-01 09:34:13',
                'title' => 'The Whispering Havens',
                'author_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2019-09-12 15:05:43',
                'updated_at' => '2019-09-12 15:05:43',
                'title' => 'The Secret of the Kissing Frogs',
                'author_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-07-10 12:57:19',
                'updated_at' => '2021-07-11 07:27:45',
                'title' => 'Legends of The Darkfold',
                'author_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-09-05 07:59:16',
                'updated_at' => '2021-09-05 07:59:16',
                'title' => 'The Gales of Artemis',
                'author_id' => 1,
            ),
        ));
        
        
    }
}