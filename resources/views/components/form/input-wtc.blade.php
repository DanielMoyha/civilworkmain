@props([
    'label',
    'input',
    'error'
])
<x-form {{ $attributes }}>
    <x-slot:nameLabel>{{ $label }}</x-slot:nameLabel>
    <input {{ $input->attributes->class(['form-input mt-1.5 w-full rounded-lg'])->merge(['autocomplete' => 'off']) }}
    >
    <div>{{ $error }}</div>
</x-form>