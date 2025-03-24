@props(['value'])

<label {{ $attributes->merge(['class' => 'floatingInput']) }}>
    {{ $value ?? $slot }}
</label>
