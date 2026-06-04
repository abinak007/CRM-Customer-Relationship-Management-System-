<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Customer extends Model
{
    protected $fillable = [
        'customer_code',
        'lead_id',
        'customer_name',
        'contact_person',
        'mobile_number',
        'email',
        'address',
        'gst_number',
        'industry_type',
        'category_id',
        'status',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function convertToCustomer(Lead $lead)
{
    Customer::create([
        'customer_code' => 'CUS-' . time(),
        'lead_id' => $lead->id,
        'customer_name' => $lead->customer_name,
        'contact_person' => $lead->customer_name,
        'mobile_number' => $lead->mobile_number,
        'email' => $lead->email,
        'address' => $lead->address,
        'status' => 'Active',
    ]);

    return redirect()
        ->route('customers.index')
        ->with('success', 'Customer created successfully.');
}

}