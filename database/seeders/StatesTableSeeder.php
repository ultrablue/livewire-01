<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'state' => 'Alaska',
                'state_code' => 'AK',
            ),
            1 => 
            array (
                'state' => 'Alabama',
                'state_code' => 'AL',
            ),
            2 => 
            array (
                'state' => 'Arkansas',
                'state_code' => 'AR',
            ),
            3 => 
            array (
                'state' => 'Arizona',
                'state_code' => 'AZ',
            ),
            4 => 
            array (
                'state' => 'California',
                'state_code' => 'CA',
            ),
            5 => 
            array (
                'state' => 'Colorado',
                'state_code' => 'CO',
            ),
            6 => 
            array (
                'state' => 'Connecticut',
                'state_code' => 'CT',
            ),
            7 => 
            array (
                'state' => 'District of Columbia',
                'state_code' => 'DC',
            ),
            8 => 
            array (
                'state' => 'Delaware',
                'state_code' => 'DE',
            ),
            9 => 
            array (
                'state' => 'Florida',
                'state_code' => 'FL',
            ),
            10 => 
            array (
                'state' => 'Georgia',
                'state_code' => 'GA',
            ),
            11 => 
            array (
                'state' => 'Hawaii',
                'state_code' => 'HI',
            ),
            12 => 
            array (
                'state' => 'Iowa',
                'state_code' => 'IA',
            ),
            13 => 
            array (
                'state' => 'Idaho',
                'state_code' => 'ID',
            ),
            14 => 
            array (
                'state' => 'Illinois',
                'state_code' => 'IL',
            ),
            15 => 
            array (
                'state' => 'Indiana',
                'state_code' => 'IN',
            ),
            16 => 
            array (
                'state' => 'Kansas',
                'state_code' => 'KS',
            ),
            17 => 
            array (
                'state' => 'Kentucky',
                'state_code' => 'KY',
            ),
            18 => 
            array (
                'state' => 'Louisiana',
                'state_code' => 'LA',
            ),
            19 => 
            array (
                'state' => 'Massachusetts',
                'state_code' => 'MA',
            ),
            20 => 
            array (
                'state' => 'Maryland',
                'state_code' => 'MD',
            ),
            21 => 
            array (
                'state' => 'Maine',
                'state_code' => 'ME',
            ),
            22 => 
            array (
                'state' => 'Michigan',
                'state_code' => 'MI',
            ),
            23 => 
            array (
                'state' => 'Minnesota',
                'state_code' => 'MN',
            ),
            24 => 
            array (
                'state' => 'Missouri',
                'state_code' => 'MO',
            ),
            25 => 
            array (
                'state' => 'Mississippi',
                'state_code' => 'MS',
            ),
            26 => 
            array (
                'state' => 'Montana',
                'state_code' => 'MT',
            ),
            27 => 
            array (
                'state' => 'North Carolina',
                'state_code' => 'NC',
            ),
            28 => 
            array (
                'state' => 'North Dakota',
                'state_code' => 'ND',
            ),
            29 => 
            array (
                'state' => 'Nebraska',
                'state_code' => 'NE',
            ),
            30 => 
            array (
                'state' => 'New Hampshire',
                'state_code' => 'NH',
            ),
            31 => 
            array (
                'state' => 'New Jersey',
                'state_code' => 'NJ',
            ),
            32 => 
            array (
                'state' => 'New Mexico',
                'state_code' => 'NM',
            ),
            33 => 
            array (
                'state' => 'Nevada',
                'state_code' => 'NV',
            ),
            34 => 
            array (
                'state' => 'New York',
                'state_code' => 'NY',
            ),
            35 => 
            array (
                'state' => 'Ohio',
                'state_code' => 'OH',
            ),
            36 => 
            array (
                'state' => 'Oklahoma',
                'state_code' => 'OK',
            ),
            37 => 
            array (
                'state' => 'Oregon',
                'state_code' => 'OR',
            ),
            38 => 
            array (
                'state' => 'Pennsylvania',
                'state_code' => 'PA',
            ),
            39 => 
            array (
                'state' => 'Rhode Island',
                'state_code' => 'RI',
            ),
            40 => 
            array (
                'state' => 'South Carolina',
                'state_code' => 'SC',
            ),
            41 => 
            array (
                'state' => 'South Dakota',
                'state_code' => 'SD',
            ),
            42 => 
            array (
                'state' => 'Tennessee',
                'state_code' => 'TN',
            ),
            43 => 
            array (
                'state' => 'Texas',
                'state_code' => 'TX',
            ),
            44 => 
            array (
                'state' => 'Utah',
                'state_code' => 'UT',
            ),
            45 => 
            array (
                'state' => 'Virginia',
                'state_code' => 'VA',
            ),
            46 => 
            array (
                'state' => 'Vermont',
                'state_code' => 'VT',
            ),
            47 => 
            array (
                'state' => 'Washington',
                'state_code' => 'WA',
            ),
            48 => 
            array (
                'state' => 'Wisconsin',
                'state_code' => 'WI',
            ),
            49 => 
            array (
                'state' => 'West Virginia',
                'state_code' => 'WV',
            ),
            50 => 
            array (
                'state' => 'Wyoming',
                'state_code' => 'WY',
            ),
        ));
        
        
    }
}