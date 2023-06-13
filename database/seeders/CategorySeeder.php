<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'fruit',
            'created_at' => now(),
            'updated_at' => now()
         ]);

         DB::table('categories')->insert([
            'name' => 'vegetable',
            'created_at' => now(),
            'updated_at' => now()
        ]);

         DB::table('categories')->insert([
            'name' => 'beverage',
            'created_at' => now(),
            'updated_at' => now()
         ]);

         DB::table('categories')->insert([
            'name' => 'dairy',
            'created_at' => now(),
            'updated_at' => now()
         ]);
        
         DB::table('categories')->insert([
            'name' => 'meat',
            'created_at' => now(),
            'updated_at' => now()
         ]);

         DB::table('categories')->insert([
            'name' => 'sauce',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
