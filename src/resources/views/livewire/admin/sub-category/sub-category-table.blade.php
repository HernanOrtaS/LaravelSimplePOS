<div class="w-full max-h-110 overflow-auto">
    <table class="table-auto w-full">
    
        <thead class="border-y-2 border-stone-700 h-10 bg-white">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria padre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($subCategories as $subcategory)
                <tr class="border-y-2 border-gray-500">
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <td>{{ $subcategory->description }}</td>
                    <td>{{ $subcategory->category->name }}</td>
                    <td>
                        {{ $subcategory->user->first_name . ' ' . $subcategory->user->last_name }}
                    </td>
                    <td class="py-1">
                        <div class="flex place-content-center gap-2">
                            <x-generics.button
                                change="blue"
                                wire:click="detail({{ $subcategory->id }})">
                                Detalles
                            </x-generics.button>

                            <x-generics.button
                                change="yellow"
                                wire:click="edit({{ $subcategory->id }})">
                                Editar
                            </x-generics.button>

                            <x-generics.button
                                change="red"
                                wire:click="delete({{ $subcategory->id }})">
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
    <div class="m-2">
        {{ $subCategories->Links() }}
    </div>
</div>