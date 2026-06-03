<x-app-layout>
    <div class="p-6">

        <h1 class="text-3xl font-bold mb-6">
            CRM Dashboard
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-lg font-semibold">
                    Total Leads
                </h2>

                <p class="text-3xl font-bold">
                    {{ $totalLeads }}
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-lg font-semibold">
                    Total Follow-ups
                </h2>

                <p class="text-3xl font-bold">
                    {{ $totalFollowups }}
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-lg font-semibold">
                    Pending Follow-ups
                </h2>

                <p class="text-3xl font-bold">
                    {{ $pendingFollowups }}
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-lg font-semibold">
                    Completed Follow-ups
                </h2>

                <p class="text-3xl font-bold">
                    {{ $completedFollowups }}
                </p>
            </div>

        </div>

    </div>
</x-app-layout>