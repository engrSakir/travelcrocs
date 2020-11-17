<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('languages')->insert([
            'name' => 'English',
            'language' => 'en',
        ]);
        */

        DB::table('languages')->insert([
            'name' => 'বাংলা',
            'code' => 'bd',
            'flag' => 'no_image.png',
        ]);

        DB::table('languages')->insert([
            'name' => 'English',
            'code' => 'en',
            'flag' => 'no_image.png',
        ]);
    }
}
