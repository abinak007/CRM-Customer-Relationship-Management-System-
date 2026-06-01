<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerCategory;

class CustomerCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Regular',
            'Premium',
            'VIP'
        ];

        foreach ($categories as $category) {
            CustomerCategory::create([
                'category_name' => $category
            ]);
        }
    }
}