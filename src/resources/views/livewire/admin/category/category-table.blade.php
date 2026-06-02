<div class="w-full max-h-110 overflow-auto">
    <table class="table-auto w-full">
    
        <thead class="border-y-2 border-stone-700 h-10 bg-white">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
                <tr class="border-y-2 border-gray-500">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        {{ $category->user->first_name . ' ' . $category->user->last_name }}
                    </td>
                    <td class="py-1">
                        <div class="flex place-content-center gap-2">
                            <x-generics.button
                                change="blue"
                                wire:click="detail({{ $category->id }})">
                                Detalles
                            </x-generics.button>

                            <x-generics.button
                                change="yellow"
                                wire:click="edit({{ $category->id }})">
                                Editar
                            </x-generics.button>

                            <x-generics.button
                                change="red"
                                wire:click="delete({{ $category->id }})">
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
        {{ $categories->Links() }}
    </div>
</div>