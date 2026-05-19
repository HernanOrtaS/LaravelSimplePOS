<div class="border-r-4 bg-gray-400 border-gray-600 flex flex-col py-4 transition-all duration-300 ease-in-out rounded-b-md rounded-r-md"
    x-data="data()" x-bind:class="barWidth">
    <div>
        <button x-on:click="stateBar=!stateBar" type="button" class="bg-red-300 px-4 py-2 rounded-xl">Title</button>
    </div>
    <p x-text="val"></p>
    <script>
        function data(){
            return {
                stateBar: true,
                
                get barWidth() {
                    return this.stateBar ? "w-60 px-4 h-screen" : "w-20 px-2 border-b-4"
                },
            }
        }
    </script>
</div>