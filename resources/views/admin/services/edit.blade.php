
<div class="grid place-items-center">
    <div class="card mt-10 w-full max-w-4xl p-4 sm:p-5">
        <p class="font-bold uppercase my-3 text-center text-lg">Formulario de Registro</p>
        <form>
            @csrf
            <input type="hidden" wire:model="service_id">
            <x-form.input>
                <x-slot:label>{{ __('Nombre del servicio') }}<x-asterisk></x-asterisk></x-slot:label>
                <x-slot:input
                    type="text"
                    id="name"
                    name="name"
                    wire:model='name'
                    value="{{ old('name') }}"
                    placeholder="Escriba el nombre del servicio, por favor"
                ></x-slot:input>
                <x-slot:error>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </x-slot:error>
            </x-form.input>
            <div class="flex justify-end space-x-2 pt-4">
                <button wire:click.prevent="update()" class="btn min-w-[7rem] bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">{{ __('Actualizar') }}</button>
                <button wire:click.prevent="cancel()" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">{{ __('Cancelar') }}</button>
            </div>
        </form>
    </div>
</div>
