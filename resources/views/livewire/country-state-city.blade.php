<div>
    {{-- <div class="">
        <label for="country" class="">{{ __('País') }}<x-asterisk></x-asterisk></label>

        <div class="">
            <select wire:model="selectedCountry" class="mt-1.5 w-full"
            x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})">
                <option value="" selected>{{ __('Elija un país') }}</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div> --}}

    <x-form.select>
        <x-slot:label>{{ __('País') }}<x-asterisk></x-asterisk></x-slot:label>

        <select wire:model="selectedCountry" class="mt-1.5 w-full" name="country"
        x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})">
            <option value="" selected>{{ __('Elija un país') }}</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <x-slot:error>
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </x-slot:error>
    </x-form.select>

    @if (!is_null($selectedCountry))
        {{-- <div class="mt-2">
            <label for="state" class="">{{ __('Departamento') }}<x-asterisk></x-asterisk></label>

            <div class="">
                <select wire:model="selectedState" class="mt-1.5 w-full"
                x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})">
                    <option value="" selected>{{ __('Elija un departamento') }}</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        <x-form.select class="mt-2">
            <x-slot:label>{{ __('Departamento') }}<x-asterisk></x-asterisk></x-slot:label>

            <select wire:model="selectedState" class="mt-1.5 w-full" name="state"
            x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})">
                <option value="" selected>{{ __('Elija un departamento') }}</option>
                @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
            </select>
            <x-slot:error>
                <x-input-error :messages="$errors->get('state')" class="mt-2" />
            </x-slot:error>
        </x-form.select>
    @endif

    @if (!is_null($selectedState))
        <x-form.select class="mt-2">
            <x-slot:label>{{ __('Ciudad') }}<x-asterisk></x-asterisk></x-slot:label>
            <select wire:model="selectedCity" class="mt-1.5 w-full" name="city_id"
            x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})">
                <option value="" selected>{{ __('Elija un municipio') }}</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}" {{ old('city_id') == $city->id ?  'selected' : '' }}>{{ $city->name }}</option>
                @endforeach
            </select>
            <x-slot:error>
                <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
            </x-slot:error>
        </x-form.select>
        {{-- <div class="mt-2">
            <label for="city" class="">{{ __('Ciudad') }}<x-asterisk></x-asterisk></label>
            <div class="">
                <select wire:model="selectedCity" class="mt-1.5 w-full"
                x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})" name="city_id">
                    <option value="" selected>{{ __('Elija un municipio') }}</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ old('city_id') == $city->id ?  'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
            </div>
        </div> --}}
    @endif
</div>