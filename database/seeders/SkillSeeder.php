<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ['skill_title'=>'TypeScript'],
            ['skill_title'=>'JavaScript'],
            ['skill_title'=>'HTML'],
            ['skill_title'=>'SCSS'],
            ['skill_title'=>'Angular'],
            ['skill_title'=>'Angular Material'],
            ['skill_title'=>'RxJS'],
            ['skill_title'=>'Cypress.io'],
            ['skill_title'=>'React'],
            ['skill_title'=>'Laravel'],
            ['skill_title'=>'Symfony'],
        ];

        DB::table('skills')->insert($skills);

    }
}
