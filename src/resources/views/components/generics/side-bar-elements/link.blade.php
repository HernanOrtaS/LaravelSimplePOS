<div x-show="stateBar">
    <a {{ $attributes->merge(["class" => $class]) }} href="{{ $href ?? '' }}">
        {{ $slot ?? 'default' }}
    </a>
</div>