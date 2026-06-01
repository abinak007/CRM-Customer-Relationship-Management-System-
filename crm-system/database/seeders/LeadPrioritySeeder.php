<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeadPriority;

class LeadPrioritySeeder extends Seeder
{
    public function run(): void
    {
        $priorities = ['Hot', 'Warm', 'Cold'];

        foreach ($priorities as $priority) {
            LeadPriority::create([
                'priority_name' => $priority
            ]);
        }
    }
}