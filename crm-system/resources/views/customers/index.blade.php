<x-app-layout>
    <div class="p-6">

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">
                Customer Management
            </h1>
        </div>

        <table class="w-full border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                @forelse($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->mobile_number }}</td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            No Customers Found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>