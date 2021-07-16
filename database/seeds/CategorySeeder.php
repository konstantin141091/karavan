<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacancies_category')->insert([
            'name' => 'Магазин',
            'slug' => 'shop',
        ]);
        DB::table('vacancies_category')->insert([
            'name' => 'Производство',
            'slug' => 'factory',
        ]);
        DB::table('vacancies_category')->insert([
            'name' => 'Центральный офис',
            'slug' => 'office',
        ]);
    }
}
