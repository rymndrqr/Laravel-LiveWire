<div class="p-6">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-center text-sm font-bold text-gray-700 border">ID</th>
                    <th class="px-6 py-3 text-center text-sm font-bold text-gray-700 border">Title</th>
                    <th class="px-6 py-3 text-center text-sm font-bold text-gray-700 border">Content</th>
                    <th class="px-6 py-3 text-center text-sm font-bold text-gray-700 border">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($posts as $post)
                <livewire:posts.table-row :post="$post" />
                @endforeach
            </tbody>
        </table>
    </div>
</div>
