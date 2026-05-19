<div>
    <button {{ $attributes->merge(["class" => $class]) }}
        type="{{ $type ?? "button" }}"
        >
        {{ $slot ?? 'default' }}
    </button>
</div>