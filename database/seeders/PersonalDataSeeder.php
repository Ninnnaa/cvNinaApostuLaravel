<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_data')->insert([
            'first_name'=>'Nina',
            'skill_id'=>'1',
            'experience_id'=>'1',
            'last_name'=>'Apostu',
            'phone'=>'37369234650',
            'current_position'=>'Web developer',
            'current_location'=>'Chisinau',
            'email'=>'apostuninuta@gmail.com',
            'description'=>'I\'m a Full-Stack Developer with over 1+ year of experience who is passionate about using one of the most powerful frameworks to create amazing web-pages',
        ]);
    }
}
