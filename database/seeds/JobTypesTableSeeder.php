<?php

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_types')->insert([
            'name' => 'Full Time',
            'alias' => 'full-time'
        ]);

        DB::table('job_types')->insert([
            'name' => 'Part Time',
            'alias' => 'part-time'
        ]);

        DB::table('job_types')->insert([
            'name' => 'Contract',
            'alias' => 'contract'
        ]);

        DB::table('job_types')->insert([
            'name' => 'Freelance',
            'alias' => 'freelance'
        ]);

        DB::table('job_types')->insert([
            'name' => 'Volunteer',
            'alias' => 'volunteer'
        ]);
    }
}
