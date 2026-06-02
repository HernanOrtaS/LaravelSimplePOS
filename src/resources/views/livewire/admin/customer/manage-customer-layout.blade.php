<div x-data="modalSubCategory">
    <div>
        <p class=" text-4xl font-bold text-center p-2">Lista de Productos</p>
    </div>
    <div x-show="open" x-cloak>
        <x-generics.modal>
            <div x-show="action=='delete'">
                <div class="text-xl p-5">
                    Estas a punto de borrar "<b>{{ $detalle->name ?? ''}}</b>"
                </div>
                <div class="flex place-content-around">
                    <x-generics.button wire:click="confirmDelete({{ $detalle->id ?? '' }})" class="px-4" change="red">Borrar</x-generics.button>
                    <x-generics.button x-on:click="open=false" class="px-4" change=stone>Cancelar</x-generics.button>
                </div>
            </div>
            <div x-show="action=='detail'">
                <x-generics.forms.detalles :detail="$detalle" />
            </div>
            <div x-show="action=='element'">
                <livewire:admin.customer.new-customer-form />
            </div>
        </x-generics.modal>
    </div>
    <div class="flex flex-col">
        <div class="flex p-3 gap-5">
            <x-generics.input wire:model.live.debounce.500ms="Search" placeholder="Buscar subcategoria por Nombre o Descripción" class="bg-stone-100"></x-generics.input>
            <x-generics.button wire:click="newCustomer()">
                Agregar
            </x-generics.button>
        </div>
        <div class=" bg-gray-100 p-5 rounded-2xl">
            <livewire:admin.customer.customer-table />
        </div>
    </div>
    <script>
        function modalSubCategory(){
            return {
                open: @entangle('open').live,
                action: @entangle('action').live,
            }
        }
    </script>
</div>
