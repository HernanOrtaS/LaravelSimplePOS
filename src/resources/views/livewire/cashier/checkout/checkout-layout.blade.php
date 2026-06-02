<div x-data="modalCategory">
    <div>
        <p class=" text-4xl font-bold text-center p-2">Layout de caja</p>
    </div>
    <div x-show="open" x-cloak>
        <x-generics.modal>
        </x-generics.modal>
    </div>
    <div class="flex flex-col">
        <div class="flex p-3 gap-5">
            <x-generics.input wire:model.live.debounce.500ms="Search" placeholder="Buscar categoria por Nombre o Descripción" class="bg-stone-100"></x-generics.input>
            <x-generics.button wire:click="newCategory">
                Agregar
            </x-generics.button>
        </div>
        <div class=" bg-gray-100 p-5 rounded-2xl">
            <livewire:cashier.checkout.cart-panel />
        </div>
    </div>
    <script>
        function modalCategory(){
            return {
                open: @entangle('open').live,
                action: @entangle('action').live,
            }
        }
    </script>
</div>
