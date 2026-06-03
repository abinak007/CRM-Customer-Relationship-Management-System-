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

        </div>

    </div>
</x-app-layout>