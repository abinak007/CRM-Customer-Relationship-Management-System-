<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'lead_number',
        'lead_date',
        'customer_name',
        'company_name',
        'mobile_number',
        'alternate_mobile',
        'email',
        'address',
        'city',
        'state',
        'country',
        'source_id',
        'priority_id',
        'stage_id',
        'customer_care_id',
        'sales_executive_id',
        'requirement_details',
        'product_service',
        'remarks',
        'created_by',
    ];

    public function source()
    {
        return $this->belongsTo(LeadSource::class, 'source_id');
    }

    public function priority()
    {
        return $this->belongsTo(LeadPriority::class, 'priority_id');
    }

    public function stage()
    {
        return $this->belongsTo(LeadStage::class, 'stage_id');
    }

    public function customerCareExecutive()
    {
        return $this->belongsTo(User::class, 'customer_care_id');
    }

    public function salesExecutive()
    {
        return $this->belongsTo(User::class, 'sales_executive_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function followups()
    {
        return $this->hasMany(LeadFollowup::class);
    }

    public function activities()
    {
        return $this->hasMany(LeadActivity::class);
    }

    public function assignments()
    {
        return $this->hasMany(LeadAssignment::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function stageHistory()
    {
        return $this->hasMany(LeadStageHistory::class);
    }
}