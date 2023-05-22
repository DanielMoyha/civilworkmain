
<div class="grid place-items-center">
    <div class="card mt-5 w-full max-w-2xl p-4 sm:p-5">
        <p class="font-bold uppercase my-3 text-center text-lg">{{ __('Registro de Estudios Extras') }}</p>
        <form>
            @csrf
            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 lg:col-span-12">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                        {{-- <label class="block col-span-2">
                            <span>Nombre del tipo de Estudio</span>
                            <input
                                class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Escriba el nombre del estudio extra" type="text" name="name"
                                id="name"
                                wire:model="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label> --}}
                        <x-form.input-wtc class="col-span-2">
                            <x-slot:label>{{ __('Nombre del tipo de Estudio') }}<x-asterisk></x-asterisk></x-slot:label>
                            <x-slot:input
                                class="bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Escriba el nombre del estudio extra"
                                type="text"
                                name="name"
                                id="name"
                                wire:model="name"
                                value="{{ old('name') }}"
                            ></x-slot:input>
                            <x-slot:error>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </x-slot:error>
                        </x-form.input-wtc>
                    </div>
                    <div class="mt-3">
                        <label class="block">
                            <span class="mb-1">{{ __('Descripción') }}<x-asterisk></x-asterisk></span>
                            <textarea
                                rows="4"
                                name="description"
                                wire:model="description"
                                id="description"
                                placeholder=" Describa brevemente este nuevo tipo de estudio que está registrando, por favor..."
                                class="form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300 mt-1"
                            >{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-2 pt-4">
                {{-- <button wire:click.prevent="store()"
                    class="btn min-w-[7rem] bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Guardar
                </button> --}}
                <button
                    wire:click.prevent="store"
                    onclick="this.innerHTML='Espere, por favor...'; this.disabled=true;"
                    class="btn min-w-[7rem] bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                ><i class="fa-solid fa-circle-check pr-1"></i>{{ __('Guardar') }}</button>
            </div>
        </form>
    </div>
</div>