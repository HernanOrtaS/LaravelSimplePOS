<div class="flex flex-col flex-1" x-data="numberInput()">

    <input
        {{ $attributes->class([
            $class,
            'border-red-500' => $errors->has($name),
        ]) }}
        placeholder="{{ $placeholder ?? 'placeholder' }}"
        type="{{ $type ?? 'text' }}"
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        x-model="input"
        x-on:input="formatInput()"
    >

    @error($name)
        <div class="mt-1 text-sm text-red-500">
            {{ $message }}
        </div>
    @enderror

    <script>
        function numberInput() {
            return {
                input: '',

                formatInput() {
                    value = this.input;

                    value = value.replace(/[^0-9.]/g, '');

                    parts = value.split('.');
                    if (parts.length > 2) {
                        value = parts[0] + '.' + parts.slice(1).join('');
                    }
                    console.log(value)

                    if (value.includes('.')) {
                        const [integer, decimal] = value.split('.');
                        value = integer + '.' + decimal.slice(0, 2);
                    }

                    this.input = value;
                }
            };
        }
    </script>

</div>