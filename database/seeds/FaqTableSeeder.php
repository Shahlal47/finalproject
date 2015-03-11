<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('faqs')->delete();

        $faqs = array(
            ['id' => 1, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 1, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 1, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 1, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 2, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 2, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 2, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 3, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 3, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 3, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 4, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 4, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 4, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 5, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 5, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 5, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 6, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'faq' => 'Who are you?', 'description' => 'I am Tumpa', 'category_id' => 6, 'status' => 0, 'created_by' => 'Tumpa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('faqs')->insert($faqs);
    }

}