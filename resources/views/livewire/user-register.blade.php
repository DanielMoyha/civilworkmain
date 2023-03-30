<div>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
    <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2">
        <label class="block">
            <span>{{ __('Nombre Completo') }}</span>

            <input
                id="name"
                name="name"
                class="form-input peer w-full mt-1.5 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent onlyLetters"
                placeholder="Escriba el nombre completo"
                type="text"
                value="{{ old('name') }}"
                wire:model='name'
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </label>
        <label class="block">
            <span>Nombre de Usuario</span>

            <input
                id="username"
                name="username"
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Escriba el nombre de Usuario"
                type="text"
                value="{{ old('username') }}"
                wire:model='username'
            />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </label>
        <label class="block">
            <span>Correo Electrónico</span>

            <input
                id="email"
                name="email"
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Escriba el correo electrónico"
                type="email"
                value="{{ old('email') }}"
                wire:model='email'
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </label>
        <label class="block">
            <span>Teléfono</span>

            <input
                id="phone"
                name="phone"
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent onlyNumbers"
                placeholder="Digite el teléfono"
                type="number"
                value="{{ old('phone') }}"
                wire:model='phone'
                maxlength="8"
            />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </label>
        <label class="block">
            <span>Dirección</span>

            <input
                id="address"
                name="address"
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Describa la dirección de calle"
                type="text"
                value="{{ old('address') }}"
                wire:model='address'
            />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </label>
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
