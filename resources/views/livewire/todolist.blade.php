<div>
    <input
        type="text"
        class="p-2 bg-teal-100 rounded-md text-black"
        wire:keydown.enter="addToDo"
        placeholder="Add something..."
        wire:model="todo"
    />

    <button class="p-2 bg-teal-200 rounded-md text-black" wire:click="addToDo">
        Add To Do
    </button>

    <ul class="w-80 h-20 mt-5">
        @foreach ($todos as $index => $todo)
            <li class="p-2 mt-2 bg-teal-200 rounded-md text-black flex justify-between items-center">
                <span>{{ $todo }}</span>
                <button wire:click="deleteToDo({{ $index }})" class="ml-4 bg-red-500 text-white px-2 py-1 rounded">
                    Delete
                </button>
            </li>
        @endforeach
    </ul>
</div>
