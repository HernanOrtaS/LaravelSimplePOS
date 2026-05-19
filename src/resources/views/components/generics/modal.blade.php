<div class="fixed inset-0 flex items-center justify-center bg-stone-300/70">
    <div x-on:click.away="$wire.open = false" class="relative bg-gray-100 rounded-xl shadow-xl p-6 z-10 max-w-lg w-full">
        {{ $slot ?? '' }}
    </div>
</div>