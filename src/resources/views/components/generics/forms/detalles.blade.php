<div class="bg-stone-200 rounded-2xl shadow-md p-6 space-y-4">
    <div class="border-y border-stone-400 py-3">
        <h2 class="text-2xl font-bold text-stone-800">
            Detalles de la categoría
        </h2>
    </div>

    <div class="grid grid-cols-1 gap-3 text-stone-700">

        <div class="flex gap-4">
            <span class="font-semibold">ID:</span>
            <span>{{ $detail->id ?? '' }}</span>
        </div>

        <div class="flex gap-4">
            <span class="font-semibold">Nombre:</span>
            <span>{{ $detail->name ?? '' }}</span>
        </div>

        <div class="flex gap-4">
            <span class="font-semibold">Descripción:</span>
            <span class="text-right">
                {{ $detail->description ?? '' }}
            </span>
        </div>

        <div class="flex gap-4">
            <span class="font-semibold">Agregado por:</span>
            <span>
                {{ ($detail->user->first_name ?? '') . ' ' . ($detail->user->last_name ?? '') }}
            </span>
        </div>

        <div class="flex gap-4">
            <span class="font-semibold">Fecha de creación:</span>
            <span>
                {{ $detail->created_at ?? '' }}
            </span>
        </div>

        <div class="flex gap-4">
            <span class="font-semibold">Última modificación:</span>
            <span>
                {{ $detail->updated_at ?? '' }}
            </span>
        </div>

        <div class="flex place-content-center">
            <x-generics.button change="red" x-on:click="open=false" class="px-6">Cerrar</x-generics.button>
        </div>
    </div>
</div>