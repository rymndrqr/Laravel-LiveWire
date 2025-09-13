<div class="p-6">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border">Email</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-900 border">{{ $user->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900 border">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900 border">{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
