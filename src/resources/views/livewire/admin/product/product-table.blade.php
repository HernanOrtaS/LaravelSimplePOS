<div class="w-full max-h-110 overflow-auto">
    <table class="table-auto w-full">
    
        <thead class="border-y-2 border-stone-700 h-10 bg-white">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Subcategoria padre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $product)
                <tr class="border-y-2 border-gray-500">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->sub_category->name }}</td>
                    <td>
                        {{ $product->user->first_name . ' ' . $product->user->last_name }}
                    </td>
                    <td class="py-1">
                        <div class="flex place-content-center gap-2">
                            <x-generics.button
                                change="blue"
                                wire:click="detail({{ $product->id }})">
                                Detalles
                            </x-generics.button>

                            <x-generics.button
                                change="yellow"
                                wire:click="edit({{ $product->id }})">
                                Editar
                            </x-generics.button>

                            <x-generics.button
                                change="red"
                                wire:click="delete({{ $product->id }})">
                                Borrar
                            </x-generics.button>
                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">
                        No data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>