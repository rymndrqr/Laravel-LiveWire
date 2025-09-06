<div class="min-h-screen flex items-center justify-center border-2">
    <div class="w-full max-w-md bg-black rounded-xl shadow-lg p-8">
        @if($successMessage)
            <div id="success-message" class="bg-emerald-500 text-white p-4 rounded mb-4">
                {{ $successMessage }}
            </div>
        @endif

        <form wire:submit.prevent="subscribe" class="space-y-6 bg-blue">
            <h2 class="text-2xl font-semibold text-center mb-4 text-gray-900">Subscribe Instantly</h2>
            <div class="space-y-4">
                <div>
                    <input
                        type="text"
                        placeholder="Name"
                        wire:model.debounce.live="name"
                        class="w-full rounded-md border px-4 py-3 bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 @error('name') border-red-500 @enderror"
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
                        class="w-full rounded-md border px-4 py-3 bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 @error('email') border-red-500 @enderror"
                    />
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button
                type="submit"
                class="w-full rounded-md bg-emerald-600 px-5 py-3 font-semibold text-black hover:bg-emerald-700">
                Subscribe
            </button>
        </form>
    </div>
</div>

<script>
    window.addEventListener('clear-message', () => {
        setTimeout(() => {
            document.getElementById('success-message')?.remove();
        }, 5000);
    });
</script>
