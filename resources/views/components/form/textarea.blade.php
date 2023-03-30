@props([
    'label',
    'textarea',
    'error'
])
<x-form {{ $attributes }}>
    <x-slot:nameLabel>{{ $label }}</x-slot:nameLabel>
    <div class="mt-1.5 w-full">
        {{ $textarea }}
    </div>
    <div>{{ $error }}</div>
</x-form>