<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadFollowup extends Model
{
    protected $fillable = [
        'lead_id',
        'followup_date',
        'followup_time',
        'followup_type',
        'discussion_notes',
        'next_followup_date',
        'next_followup_time',
        'followup_status',
        'created_by',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}