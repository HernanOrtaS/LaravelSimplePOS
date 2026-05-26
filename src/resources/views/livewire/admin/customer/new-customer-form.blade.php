<div x-data="categorySubMode()">
    <div class=" text-2xl text-center font-bold mb-5">
        <p>Agregar nuevo cliente</p>
    </div>
    <form wire:submit.prevent="{{ $mode=='create' ? 'save()' : 'patch()' }}" class="w-full h-full grid grid-cols-1 gap-5">
        <div class="flex gap-2">
            <div>
                <label>Nombre:</label>
                <x-generics.input name="first_name" wire:model="first_name" placeholder="Ingresa el nombre" />
            </div>
            <div>
                <label>Apellido:</label>
                <x-generics.input name="last_name" wire:model="last_name" placeholder="Ingresa el apellido"/>
            </div>
        </div>
        <div class="flex gap-2">
            <div>
                <label>Email:</label>
                <x-generics.input name="email" wire:model="email" type="email" placeholder="Ingresa el correo" />
            </div>
            <div>
                <label>Telefono:</label>
                <x-generics.input name="phone_number" wire:model="phone_number" placeholder="Ingresa el numero de telefono"/>
            </div>
        </div>
        
        <div class=" flex place-content-center gap-6">
            <x-generics.button x-show="mode=='create'" change="green" type="submit" class="px-8">Crear</x-generics.button>
            <x-generics.button x-show="mode=='edit'" change="green" type="submit" class="px-8">Modificar</x-generics.button>
            <x-generics.button change="red" class="px-8" x-on:click="open=false">Cerrar</x-generics.button>
        </div>
    </form>
    <script>
        function categorySubMode(){
            return {
                mode: @entangle('mode')
            }
        }
    </script>
</div>
