<div class="flex place-content-around bg-linear-210 bg-indigo-300 to-emerald-400 h-screen">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="flex-3">

    </div>
    <div class="flex-2 flex content-center items-center p-5">
        <form wire:submit.prevent="login" class="flex-1 flex flex-col gap-5 h-3/4 px-10 place-content-center bg-linear-180 bg-slate-300 to-stone-300 rounded-2xl shadow-2xl">
            @csrf
            <div class="text-center">
                <label class=" font-bold text-4xl text-stone-800">Logeate con tu correo</label>
            </div>
            <div class="flex items-center gap-5">
                <label for="email">Correo:</label>
                <x-generics.input name="email" wire:model="email" id="email" type="mail" placeholder="Correo" class="bg-stone-100 hover:border-2 hover:border-blue-300"></x-generics.input>
            </div>
            <div class="flex items-center gap-5">
                <label for="password">Password:</label>
                <x-generics.input name="password" wire:model="password" type="password" id="password" placeholder="Password" class="bg-stone-100 hover:border-2 hover:border-blue-300"></x-generics.input>
            </div>
            <div class="flex place-content-center">
                <x-generics.button type="submit" change="emerald" class="py-3 px-12">Login</x-generics.button>
            </div>
        </form>
    </div>
</div>
