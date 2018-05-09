<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResumeSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(PageSeeder::class);
    }
}
