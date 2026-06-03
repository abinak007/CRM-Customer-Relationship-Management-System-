<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl font-bold mb-4">
            Add Follow-up
        </h1>

        <form action="{{ route('followups.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label>Lead</label>

                <select name="lead_id" class="border rounded w-full p-2">
                    @foreach($leads as $lead)
                        <option value="{{ $lead->id }}">
                            {{ $lead->customer_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label>Follow-up Date</label>

                <input type="date"
                       name="followup_date"
                       class="border rounded w-full p-2"
                       required>
            </div>

            <div class="mb-4">
                <label>Follow-up Time</label>

                <input type="time"
                       name="followup_time"
                       class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label>Follow-up Type</label>

                <select name="followup_type"
                        class="border rounded w-full p-2">

                    <option value="Call">Call</option>
                    <option value="Meeting">Meeting</option>
                    <option value="Email">Email</option>
                    <option value="WhatsApp">WhatsApp</option>
                    <option value="Site Visit">Site Visit</option>

                </select>
            </div>

            <div class="mb-4">
                <label>Discussion Notes</label>

                <textarea name="discussion_notes"
                          class="border rounded w-full p-2"></textarea>
            </div>

            <div class="mb-4">
                <label>Next Follow-up Date</label>

                <input type="date"
                       name="next_followup_date"
                       class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label>Next Follow-up Time</label>

                <input type="time"
                       name="next_followup_time"
                       class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label>Status</label>

                <select name="followup_status"
                        class="border rounded w-full p-2">

                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                    <option value="Rescheduled">Rescheduled</option>

                </select>
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                Save Follow-up
            </button>

        </form>

    </div>
</x-app-layout>