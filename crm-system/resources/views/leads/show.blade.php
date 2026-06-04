<x-app-layout>
    <div class="p-6">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">
                Lead Details
            </h1>

            <a href="{{ route('leads.index') }}"
               class="bg-gray-600 text-white px-4 py-2 rounded">
                Back
            </a>
            <form action="{{ route('leads.convert', $lead->id) }}"
      method="POST"
      style="display:inline;">
    @csrf

    <button type="submit"
            onclick="return confirm('Convert this lead to customer?')"
            class="bg-blue-600 text-white px-4 py-2 rounded">
        Convert To Customer
    </button>
</form>
        </div>

        <div class="bg-white shadow rounded p-6">

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <strong>Lead Number:</strong><br>
                    {{ $lead->lead_number }}
                </div>

                <div>
                    <strong>Lead Date:</strong><br>
                    {{ $lead->lead_date }}
                </div>

                <div>
                    <strong>Customer Name:</strong><br>
                    {{ $lead->customer_name }}
                </div>

                <div>
                    <strong>Company Name:</strong><br>
                    {{ $lead->company_name ?? '-' }}
                </div>

                <div>
                    <strong>Mobile Number:</strong><br>
                    {{ $lead->mobile_number }}
                </div>

                <div>
                    <strong>Alternate Mobile:</strong><br>
                    {{ $lead->alternate_mobile ?? '-' }}
                </div>

                <div>
                    <strong>Email:</strong><br>
                    {{ $lead->email ?? '-' }}
                </div>

                <div>
                    <strong>Source:</strong><br>
                    {{ $lead->source->source_name ?? '-' }}
                </div>

                <div>
                    <strong>Priority:</strong><br>
                    {{ $lead->priority->priority_name ?? '-' }}
                </div>

                <div>
                    <strong>Stage:</strong><br>
                    {{ $lead->stage->stage_name ?? '-' }}
                </div>

                <div>
                    <strong>City:</strong><br>
                    {{ $lead->city ?? '-' }}
                </div>

                <div>
                    <strong>Country:</strong><br>
                    {{ $lead->country ?? '-' }}
                </div>

            </div>

            <hr class="my-6">

            <div>
                <strong>Address:</strong><br>
                {{ $lead->address ?? '-' }}
            </div>

            <br>

            <div>
                <strong>Requirement Details:</strong><br>
                {{ $lead->requirement_details ?? '-' }}
            </div>

            <br>

            <div>
                <strong>Remarks:</strong><br>
                {{ $lead->remarks ?? '-' }}
            </div>
<div>
               <a href="{{ route('followups.create') }}"
   class="bg-blue-600 text-white px-4 py-2 rounded">
    Add Follow-up
</a>
            </div>
            <hr class="my-6">

<h2 class="text-xl font-bold mb-4">
    Follow-up History
</h2>

<table class="w-full border">
    <thead>
        <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Status</th>
            <th>Notes</th>
        </tr>
    </thead>

    <tbody>

        @forelse($lead->followups as $followup)

            <tr>
                <td>{{ $followup->followup_date }}</td>

                <td>{{ $followup->followup_type }}</td>

                <td>{{ $followup->followup_status }}</td>

                <td>{{ $followup->discussion_notes }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="4">
                    No Follow-ups Found
                </td>
            </tr>

        @endforelse

    </tbody>
</table>
        </div>
    </div>
</x-app-layout>