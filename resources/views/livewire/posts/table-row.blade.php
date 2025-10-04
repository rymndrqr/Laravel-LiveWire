<tr class="{{ $post->is_archived ? 'bg-gray-100 text-gray-900' : '' }}">
    <td class="px-6 py-4 text-center text-gray-900">{{ $post->id }}</td>
    <td class="px-6 py-4 text-center text-gray-900">{{ $post->title }}</td>
    <td class="px-6 py-4 text-center text-gray-900">{{ $post->content }}</td>

    <td class="px-6 py-4 text-center text-gray-900">
        @if($post->is_archived)
            <button
                class="bg-red-400 text-white px-3 py-2 rounded"
                wire:click="unarchive"
                onclick="return confirm('Are you sure you want to unarchive this post?')">
                Unarchive
            </button>
        @else
                <button
                    class="bg-green-400 text-center px-3 py-2 rounded"
                    wire:click="archive"
                    onclick="return confirm('Proceed Action?')">
                    Archive
                </button>
        @endif
    </td>

</tr>
