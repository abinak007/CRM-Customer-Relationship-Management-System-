<x-app-layout>
    <div class="p-6">

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">
                Lead Management
            </h1>

            <a href="{{ route('leads.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                Add Lead
            </a>
        </div>

        <table class="w-full border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lead Number</th>
                    <th>Customer</th>
                    <th>Mobile</th>
                    <th>Priority</th>
                    <th>Stage</th>
                </tr>
            </thead>

            <tbody>
                @forelse($leads as $lead)
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $lead->lead_number }}</td>
                        <td>{{ $lead->customer_name }}</td>
                        <td>{{ $lead->mobile_number }}</td>
                        <td>{{ $lead->priority->priority_name ?? '-' }}</td>
                        <td>{{ $lead->stage->stage_name ?? '-' }}</td>
                        <td>
    <a href="{{ route('leads.show', $lead->id) }}"
       class="bg-green-600 text-white px-3 py-1 rounded">
        View
    </a>

    <a href="{{ route('leads.edit', $lead->id) }}"
       class="bg-yellow-500 text-white px-3 py-1 rounded ml-2">
        Edit
    </a>

    <form action="{{ route('leads.destroy', $lead->id) }}"
          method="POST"
          style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit"
                onclick="return confirm('Delete this lead?')"
                class="bg-red-600 text-white px-3 py-1 rounded ml-2">
            Delete
        </button>
    </form>
</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            No Leads Found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
