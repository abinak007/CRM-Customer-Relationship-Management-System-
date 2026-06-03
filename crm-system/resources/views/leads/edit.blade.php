<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl font-bold mb-4">
            Edit Lead
        </h1>

        <form action="{{ route('leads.update', $lead->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Customer Name</label>
                <input type="text"
                       name="customer_name"
                       value="{{ $lead->customer_name }}"
                       class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label>Mobile Number</label>
                <input type="text"
                       name="mobile_number"
                       value="{{ $lead->mobile_number }}"
                       class="border rounded w-full p-2">
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                Update Lead
            </button>

        </form>

    </div>
</x-app-layout>