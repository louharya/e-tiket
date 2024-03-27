<x-app-layout>
    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">ID Tiket</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">No Telp</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Seat</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Total Price</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-900 divide-y divide-gray-700">
                        @foreach($orders as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->id_tiket }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->no_telp }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->jumlah_kursi }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->total_harga }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $order->status }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
