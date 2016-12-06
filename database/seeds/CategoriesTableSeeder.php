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
            'name' => 'Groceries',
            'description' => 'You know, groceries.',
            'type' => 'private',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fuel',
            'description' => 'Gotta drive.',
            'type' => 'private',
        ]);
        DB::table('categories')->insert([
            'name' => 'Entertainment',
            'description' => 'Gotta have some fun.',
            'type' => 'private',
        ]);
    }
}
