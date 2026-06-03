<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadFollowup;

class LeadFollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $leads = Lead::all();

    return view('followups.create', compact('leads'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    LeadFollowup::create([
        'lead_id' => $request->lead_id,
        'followup_date' => $request->followup_date,
        'followup_time' => $request->followup_time,
        'followup_type' => $request->followup_type,
        'discussion_notes' => $request->discussion_notes,
        'next_followup_date' => $request->next_followup_date,
        'next_followup_time' => $request->next_followup_time,
        'followup_status' => $request->followup_status,
        'created_by' => auth()->id(),
    ]);

    return redirect()
        ->route('leads.index')
        ->with('success', 'Follow-up saved successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
