<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadSource;
use App\Models\LeadPriority;
use App\Models\LeadStage;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $leads = Lead::with([
        'source',
        'priority',
        'stage'
    ])->latest()->get();

    return view('leads.index', compact('leads'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $sources = LeadSource::all();
    $priorities = LeadPriority::all();
    $stages = LeadStage::all();

    return view('leads.create', compact(
        'sources',
        'priorities',
        'stages'
    ));
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    Lead::create([
        'lead_number' => 'LD-' . time(),
        'lead_date' => now(),

        'customer_name' => $request->customer_name,
        'mobile_number' => $request->mobile_number,

        'source_id' => $request->source_id,
        'priority_id' => $request->priority_id,
        'stage_id' => $request->stage_id,
    ]);

    return redirect()
        ->route('leads.index')
        ->with('success', 'Lead Created Successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
{
    $lead->load('followups');

    return view('leads.show', compact('lead'));
}

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Lead $lead)
{
    $sources = LeadSource::all();
    $priorities = LeadPriority::all();
    $stages = LeadStage::all();

    return view('leads.edit', compact(
        'lead',
        'sources',
        'priorities',
        'stages'
    ));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Lead $lead)
{
    $lead->update([
        'customer_name' => $request->customer_name,
        'mobile_number' => $request->mobile_number,
    ]);

    return redirect()
        ->route('leads.index')
        ->with('success', 'Lead updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Lead $lead)
{
    $lead->delete();

    return redirect()
        ->route('leads.index')
        ->with('success', 'Lead deleted successfully');
}
}
