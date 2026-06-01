<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeadSource;

class LeadSourceSeeder extends Seeder
{
    public function run(): void
    {
        $sources = [
            'Website',
            'Social Media',
            'Referral',
            'Direct Call',
            'Advertisement',
            'Walk-in',
            'Other'
        ];

        foreach ($sources as $source) {
            LeadSource::create([
                'source_name' => $source
            ]);
        }
    }
}