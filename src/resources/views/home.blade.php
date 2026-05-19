<x-layouts.app>
    <div class="flex h-screen">
        <div>
            <x-generics.side-bar-elements.side-bar title="Sidebar">
                <x-generics.side-bar-elements.link>
                    @svg('heroicon-s-home', 'h-5')
                    <p>Home</p>
                </x-generics.side-bar-elements.link>
                <x-generics.side-bar-elements.link>
                    @svg('heroicon-s-home', 'h-5')
                    <p>Home</p>
                </x-generics.side-bar-elements.link>
            </x-generics.side-bar-elements.side-bar>
            
        </div>
        <div class="flex-1 flex items-start p-2">
            <div class="flex flex-1 items-center gap-2">
                <label>
                    Type your name
                </label>
                <x-generics.input/>
                <x-generics.button change="blue">Defaut</x-generics.button>
            </div>
        </div>
    </div>
</x-layouts.app>