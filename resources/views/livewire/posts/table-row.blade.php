<tr class="{{$post->id % 2 == 0 ? 'bg-gray-100 text-gray-900': ''}}">
        <td class="px-6 py-4 text-sm text-gray-900 border">{{ $post->id }}</td>
        <td class="px-6 py-4 text-sm text-gray-900 border">{{ $post->title }}</td>
        <td class="px-6 py-4 text-sm text-gray-900 border">{{ $post->content }}</td>
        <td class="px-6 py-4 text-sm text-gray-900 border">{{ $post->is_archived }}</td>
</tr>
