<div x-data="categorySubMode()">
    <div class=" text-2xl text-center font-bold mb-5">
        <p>Agregar nuevo producto</p>
    </div>
    <form wire:submit.prevent="{{ $mode=='create' ? 'save()' : 'patch()' }}" class="w-full h-full grid grid-cols-1 gap-5">
        <div>
            <label>Nombre:</label>
            <x-generics.input name="name" wire:model="name" placeholder="Ingresa el nombre" />
        </div>
        <div>
            <label>Descripcion:</label>
            <x-generics.input name="description" wire:model="description" placeholder="Ingresa la descripcion"/>
        </div>
        <div>
            <label>Sub Categoria:</label>
            <select wire:model="sub_category_id" class="bg-gray-200 rounded-xl p-2">
                <option value="0">-- Elige una subcategoria --</option>

                @foreach ($subCategoryList as $subCategory)
                    <option value="{{ $subCategory->id }}">
                        {{ $subCategory->name }}
                    </option>
                @endforeach
            </select>
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
