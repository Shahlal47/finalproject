<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {


    public function run()
    {
        Model::unguard();

//        $this->call('ProjectsTableSeeder');
//        $this->call('TasksTableSeeder');

        $this->call('CategoryTableSeeder');
        $this->call('FaqsTableSeeder');
    }

}