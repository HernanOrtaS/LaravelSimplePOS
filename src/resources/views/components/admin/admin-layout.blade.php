<x-layouts.app>
    <div class="flex h-screen">
        <div>
            <x-generics.side-bar-elements.side-bar title="Sidebar" class=" bg-gray-200">
                <div class="flex-1">
                    <x-generics.side-bar-elements.link change="green" href="{{ route('admin.dashboard') }}" active="admin.dashboard">
                        @svg('heroicon-s-home', 'h-6 text-green-800')
                        <p>Home</p>
                    </x-generics.side-bar-elements.link>
                    <x-generics.side-bar-elements.link change="green" href="{{ route('admin.manageCategory') }}" active="admin.manageCategory">
                        @svg('heroicon-s-table-cells', 'h-6 text-green-800')
                        <p>Categorias</p>
                    </x-generics.side-bar-elements.link>
                </div>
                <div class="flex self-center p-5">
                    <livewire:admin.logout.logout />
                </div>
            </x-generics.side-bar-elements.side-bar>
            
        </div>
        <div class="flex flex-1 h-screen">
            <div class="p-2 flex-1">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.app>