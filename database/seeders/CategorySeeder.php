<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Food', 'Clothes', 'Fashion', 'Electronics', 'Accessories', 'Apartments', 'Mobiles'];
            foreach($categories as $category){
                Category::create([
                    'name' => $category,    
                ]);
            }
    }
}
