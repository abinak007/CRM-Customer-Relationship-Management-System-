<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadFollowup;

class DashboardController extends Controller
{
    public function index()
    {
        $totalLeads = Lead::count();

        $totalFollowups = LeadFollowup::count();

        $pendingFollowups = LeadFollowup::where(
            'followup_status',
            'Pending'
        )->count();

        $completedFollowups = LeadFollowup::where(
            'followup_status',
            'Completed'
        )->count();

        return view('dashboard', compact(
            'totalLeads',
            'totalFollowups',
            'pendingFollowups',
            'completedFollowups'
        ));
    }
}