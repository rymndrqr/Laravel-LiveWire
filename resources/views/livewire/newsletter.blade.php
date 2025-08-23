
    <div class="max-w-md mx-auto px-6 py-10">

        <form wire:submit.prevent="subscribe" class="space-y-4">
            @if($successMessage)

            <div id="success-message" class="bg-emerald-500 text-white p-4 rounded mb-4">
                {{ $successMessage }}
            </div>
            @endif
            <h2 id="subs" class="text-2xl font-semibold text-center mb-4">Subscribe Instantly</h2>
            <div>
                <input
                    type="text"
                    placeholder="Name"
                    wire:model.debounce.live="name"
                    class="w-full rounded-md border px-4 py-3 bg-black focus:outline-none focus:ring-2 focus:ring-emerald-500 @error('name') border-red-500 @enderror"
                />
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input
                    type="email"
                    placeholder="Email"
                    wire:model.debounce.live="email"
                    class="w-full rounded-md border px-4 py-3 bg-black focus:outline-none focus:ring-2 focus:ring-emerald-500 @error('email') border-red-500 @enderror"
                />
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button
                type="submit"
                class="w-full rounded-md bg-emerald-600 px-5 py-3 font-medium text-white hover:bg-emerald-700">
                Subscribe
            </button>

        </form>
    </div>

    <script>
        window.addEventListener('clear-message', () => {
            setTimeout(() => {
                document.getElementById('success-message')?.remove();
            }, 5000);
        })
        window.addEventListener('clear-message', () => {
            setTimeout(() => {
                document.getElementById('subs')?.remove();
            }, 5000);
        })
    </script>

