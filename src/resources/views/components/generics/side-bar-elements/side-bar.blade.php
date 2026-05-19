<div class="h-full p-2"
    x-data="data()">
    <div {{ $attributes->merge(["class" => $class]) }} 
            x-bind:class="{ 'w-60 h-full': stateBar, 'w-20 h-10': !stateBar }">
        <div class="flex justify-center transition-all my-5 " 
            x-bind:class="{ 'my-5' : stateBar, '' : !stateBar }">
            <button x-on:click="stateBar=!stateBar" type="button" class="bg-red-300 px-4 py-2 rounded-xl">{{ $title }}</button>
        </div>
        {{ $slot ?? '' }}
    </div>
    <script>
        function data(){
            return {
                stateBar: true,
                
                get barSize() {
                    return this.stateBar ? "w-60 h-full" : "w-20 h-10"
                },
            }
        }
    </script>
</div>