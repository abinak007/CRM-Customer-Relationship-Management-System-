<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeadStage;

class LeadStageSeeder extends Seeder
{
    public function run(): void
    {
        $stages = [
            'New Lead',
            'Contacted',
            'Follow-up',
            'Meeting Scheduled',
            'Proposal Sent',
            'Negotiation',
            'Sales Closed (Won)',
            'Cancelled',
            'Lost'
        ];

        foreach ($stages as $stage) {
            LeadStage::create([
                'stage_name' => $stage
            ]);
        }
    }
}