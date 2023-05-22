
<div class="grid place-items-center">
    <div class="card mt-5 w-full max-w-2xl p-4 sm:p-5">
        <p class="font-bold uppercase my-3 text-center text-lg">{{ __('Actualización del Material de Construcción') }}</p>
        <form>
            @csrf
            <input type="hidden" wire:model="material_id">
            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 lg:col-span-12">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        {{-- <label class="block col-span-2">
                            <span>Nombre del Material</span>
                            <input
                                class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Escriba el nombre del material de construccoón" type="text" name="name"
                                id="name"
                                wire:model="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label> --}}
                        <x-form.input-wtc class="col-span-2">
                            <x-slot:label>{{ __('Nombre del Material') }}<x-asterisk></x-asterisk></x-slot:label>
                            <x-slot:input
                                class="bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Escriba el nombre del material de construcción"
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
                        {{-- <label class="block">
                            <span>Cantidad</span>
                            <input
                                class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Digite la cantidad del material que está registrando"
                                type="number"
                                name="quantity"
                                id="quantity"
                                wire:model="quantity" />
                                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </label> --}}
                        <x-form.input-wtc>
                            <x-slot:label>{{ __('Cantidad') }}<x-asterisk></x-asterisk></x-slot:label>
                            <x-slot:input
                                class="onlyNumbers form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Digite la cantidad del material que está registrando"
                                type="number"
                                name="quantity"
                                id="quantity"
                                max="99999"
                                wire:model="quantity"
                                value="{{ old('quantity') }}"
                            ></x-slot:input>
                            <x-slot:error>
                                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                            </x-slot:error>
                        </x-form.input-wtc>
                    </div>
                    <div class="mt-3">

                        <label class="block">
                            <textarea
                            rows="4"
                            id="remarks"
                            name="remarks"
                            wire:model="remarks"
                            placeholder=" En caso de existir alguna observación sobre el material de construcción, descríbalo brevemente por favor..."
                            class="form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300"
                            >{{ old('remarks') }}</textarea>
                            <x-input-error :messages="$errors->get('remarks')" class="mt-2" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-2 pt-4">
                <button
                    wire:click.prevent="update()"
                    onclick="this.innerHTML='Actualizando...'; this.disabled=true;"
                    class="btn min-w-[7rem] bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                ><i class="fa-solid fa-circle-check pr-1"></i>{{ __('Actualizar') }}</button>
                <button
                    wire:click.prevent="cancel()"
                    class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                ><i class="fa-solid fa-xmark pr-1"></i>{{ __('Cancelar') }}</button>
            </div>
        </form>
    </div>
</div>