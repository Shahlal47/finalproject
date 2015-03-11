<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categories')->delete();

        $categories = array(
            ['id' => 1, 'category' => 'Category 1', 'description' => 'General Questions', 'created_by' => 'shahlal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'category' => 'Category 2', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'category' => 'Category 3', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'category' => 'Category 4', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'category' => 'Category 5', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'category' => 'Category 6', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'category' => 'Category 7', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'category' => 'Category 8', 'description' => 'General Questions', 'created_by' => 'tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('categories')->insert($categories);
    }

}