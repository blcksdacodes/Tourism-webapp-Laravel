<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Waterpark'
        ]);
        DB::table('categories')->insert([
            'id' => '2',
            'name' => 'Mall'
        ]);
       
        DB::table('categories')->insert([
            'id' => '4',
            'name' => 'Pegunungan'
        ]);
       

    }
}
