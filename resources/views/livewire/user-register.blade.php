<div>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2">
            <x-form.input>
                <x-slot:label>{{ __('Nombre Completo') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="text"
                    id="name"
                    name="name"
                    wire:model='name'
                    class="onlyLetters"
                    value="{{ old('name') }}"
                    placeholder="Escriba el nombre completo"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <x-form.input>
                <x-slot:label>{{ __('Nombre de Usuario') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="text"
                    id="username"
                    name="username"
                    wire:model='username'
                    value="{{ old('username') }}"
                    placeholder="Escriba el nombre de usuario"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <x-form.input>
                <x-slot:label>{{ __('Correo Electrónico') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="email"
                    id="email"
                    name="email"
                    wire:model='email'
                    value="{{ old('email') }}"
                    placeholder="Escriba el correo electrónico"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <x-form.input>
                <x-slot:label>{{ __('Teléfono') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="number"
                    id="phone"
                    name="phone"
                    wire:model='phone'
                    maxlength="8"
                    class="onlyNumbers"
                    value="{{ old('phone') }}"
                    placeholder="Digite el teléfono"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <x-form.input>
                <x-slot:label>{{ __('Dirección') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="text"
                    id="address"
                    name="address"
                    wire:model='address'
                    value="{{ old('address') }}"
                    placeholder="Describa la dirección de calle"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <label class="block">
                {{-- @livewire('country-state-city', ['selectedCity' => 30000]) --}}
                @livewire('country-state-city')
            </label>
            @livewire('password-generate')
        </div>
        <div class="mt-6 grid w-full md:w-80 grid-cols-2 p-4 gap-4">
            <button class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90">
                Guardar
            </button>

            <a href="{{ route('admin.users.index') }}"
                class="btn bg-error font-medium text-white hover:bg-error-focus hover:shadow-lg hover:shadow-error/50 focus:bg-error-focus focus:shadow-lg focus:shadow-error/50 active:bg-error-focus/90">
                Volver
            </a>
        </div>
    </form>
</div>
