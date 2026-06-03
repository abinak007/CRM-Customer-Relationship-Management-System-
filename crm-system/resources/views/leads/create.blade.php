<x-app-layout>
    <div class="p-6">

        <h1 class="text-2xl font-bold mb-4">
            Create Lead
        </h1>

        <form action="{{ route('leads.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label>Customer Name</label>
                <input type="text"
                       name="customer_name"
                       class="border rounded w-full p-2"
                       required>
            </div>

            <div class="mb-4">
                <label>Mobile Number</label>
                <input type="text"
                       name="mobile_number"
                       class="border rounded w-full p-2"
                       required>
            </div>

            <div class="mb-4">
                <label>Lead Source</label>
                <select name="source_id"
                        class="border rounded w-full p-2">

                    @foreach($sources as $source)
                        <option value="{{ $source->id }}">
                            {{ $source->source_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-4">
                <label>Priority</label>
                <select name="priority_id"
                        class="border rounded w-full p-2">

                    @foreach($priorities as $priority)
                        <option value="{{ $priority->id }}">
                            {{ $priority->priority_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-4">
                <label>Stage</label>
                <select name="stage_id"
                        class="border rounded w-full p-2">

                    @foreach($stages as $stage)
                        <option value="{{ $stage->id }}">
                            {{ $stage->stage_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                Save Lead
            </button>

        </form>

    </div>
</x-app-layout>