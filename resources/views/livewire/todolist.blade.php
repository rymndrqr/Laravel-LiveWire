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

    <ul class="mt-3">
        @foreach ($todos as $index => $todo)
            <li class="p-2 w-80 h-12 mt-2 bg-teal-200 bg-blend rounded-md text-black flex justify-between items-center">
                <span>{{ $todo }}</span>
                <button wire:click="deleteToDo({{ $index }})" class="ml-4 bg-none-500 text-white px-2 py-1 rounded">
                    <img src="/deleteb.png" class="w-10 h-10">
                </button>
            </li>
        @endforeach
    </ul>
</div>
