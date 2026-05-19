<div class="flex flex-col flex-1">

    <input
        {{ $attributes->class([
            $class,
            'border-red-500' => $errors->has($name),
        ]) }}
        placeholder="{{ $placeholder ?? 'placeholder' }}"
        type="{{ $type ?? 'text' }}"
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
    >

    @error($name)
        <div class="mt-1 text-sm text-red-500">
            {{ $message }}
        </div>
    @enderror

</div>