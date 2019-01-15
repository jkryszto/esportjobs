<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Creative',
            'alias' => 'creative'
        ]);

        DB::table('categories')->insert([
            'name' => 'Management',
            'alias' => 'management'
        ]);

        DB::table('categories')->insert([
            'name' => 'Development',
            'alias' => 'development'
        ]);

        DB::table('categories')->insert([
            'name' => 'Marketing',
            'alias' => 'marketing'
        ]);

        DB::table('categories')->insert([
            'name' => 'Social Media',
            'alias' => 'social-media'
        ]);
    }
}
