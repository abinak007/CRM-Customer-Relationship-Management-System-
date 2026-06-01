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
}
