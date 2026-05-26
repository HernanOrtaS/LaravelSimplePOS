<div class="w-full max-h-110 overflow-auto">
    <table class="table-auto w-full">
    
        <thead class="border-y-2 border-stone-700 h-10 bg-white">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Agregado por</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($customers as $customer)
                <tr class="border-y-2 border-gray-500">
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>
                        {{ $customer->user->first_name . ' ' . $customer->user->last_name }}
                    </td>
                    <td class="py-1">
                        <div class="flex place-content-center gap-2">
                            <x-generics.button
                                change="blue"
                                wire:click="detail({{ $customer->id }})">
                                Detalles
                            </x-generics.button>

                            <x-generics.button
                                change="yellow"
                                wire:click="edit({{ $customer->id }})">
                                Editar
                            </x-generics.button>

                            <x-generics.button
                                change="red"
                                wire:click="delete({{ $customer->id }})">
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