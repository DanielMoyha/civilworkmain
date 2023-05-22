<x-main class="">
    @section('sidebar-panel')
        @include('layouts.sidebar-panel.sp-works')
    @endsection

    @section('content')
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Trabajos - Obras') }}</h2>
                <x-separate-vertical></x-separate-vertical>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <x-link :href="route('admin.works.index')">{{ __('Obras') }}</x-link>
                    <li>{{ __('Actualización de Obra') }}</li>
                </ul>
            </div>
            {{-- <div x-data="{isShow:true}" :class="!isShow &amp;&amp; 'opacity-0 transition-opacity duration-300'" class="alert flex items-center justify-between overflow-hidden rounded-lg border border-info text-info">
                <div class="flex">
                  <div class="bg-info p-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                  </div>
                  <div class="px-4 py-3 sm:px-5">This is simple alert</div>
                </div>
                <div class="px-2">
                  <button @click="isShow = false; setTimeout(()=>$root.remove(),300)" class="btn h-7 w-7 rounded-full p-0 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                  </button>
                </div>
              </div> --}}

            <form action="{{ route('admin.works.update', [($work->id)]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                    <div class="col-span-12 lg:col-span-8">
                        <div class="card">
                            <div class="tabs flex flex-col">
                                <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100 space-x-2 dark:text-primary">
                                        <span><i class="fa-solid fa-layer-group text-base"></i></span>
                                        <span> {{ __('Actualizar datos de Obra') }}</span>
                                        @if (!$work->completion_date)
                                            <span class="text-success text-xs"><i class="fa-solid fa-circle mr-1"></i>{{ __('En Ejecución') }}</span>
                                        @endif
                                    </h2>
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('admin.works.index') }}"
                                            class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                        >{{ __('Cancelar') }}</a>
                                        <button
                                            type="submit"
                                            class="btn min-w-[7rem] rounded-full bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                        >
                                            {{ __('Actualizar') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-content p-4 sm:p-5">
                                    <div class="space-y-5">
                                        <x-form.input>
                                            <x-slot:label>{{ __('Nombre del Trabajo') }}<x-asterisk></x-asterisk></x-slot:label>
                                            <x-slot:input
                                                placeholder="Escriba el nombre del trabajo"
                                                type="text"
                                                name="name"
                                                value="{{ old('name', $work->name) }}"
                                            ></x-slot:input>
                                            <x-slot:error>
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </x-slot:error>
                                        </x-form.input>
                                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                            <x-form.select>
                                                <x-slot:label>{{ __('Seleccione el tipo de trabajo') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <select
                                                    class="mt-1.5 w-full"
                                                    x-init="$el._x_tom = new Tom($el,pages.tomSelect)"
                                                    placeholder="Seleccione el tipo..."
                                                    name="type_work_id"
                                                >
                                                <option value>{{ __('Seleccione el tipo de trabajo') }}</option>
                                                @foreach ($type_works as $type_work)
                                                    <option value="{{ $type_work->id }}" @selected(old('type_work_id', $work->type_work_id) == $type_work->id)>{{ $type_work->name }}</option>
                                                @endforeach
                                                </select>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('type_work_id')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.select>
                                            <x-form.select>
                                                <x-slot:label>{{ __('Seleccione un Encargado') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <select
                                                    class="mt-1.5 w-full "
                                                    {{-- x-init="$el._x_tom = new Tom($el,pages.tomSelect)" --}}
                                                    x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})"
                                                    placeholder="Seleccione un Encargado..."
                                                    name="user_id"
                                                >
                                                    <option value>{{ __('Seleccione un Encargado') }}</option>
                                                    @foreach ($users as $user)
                                                        @if ($user->roles->first()->name ?? null)
                                                            <option
                                                                value="{{ $user->id }}"
                                                                @selected(old('user_id', $work->user_id) == $user->id)
                                                            >
                                                                <span>
                                                                    {{ $user->roles->first()->name ?? null }} - {{ $user->name }}
                                                                </span>
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('type_work_id')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.select>
                                            <x-form.input>
                                                <x-slot:label>{{ __('Nombre del Contratante') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <x-slot:input
                                                    placeholder="Escriba el nombre de la entidad contratante"
                                                    type="text"
                                                    name="name_contractor"
                                                    value="{{ old('name_contractor', $work->name_contractor) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('name_contractor')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input>
                                            <x-form.input>
                                                <x-slot:label>{{ __('Dirección del Contratante') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <x-slot:input
                                                    placeholder="Escriba el dirección de la entidad contratante"
                                                    type="text"
                                                    name="address_contractor"
                                                    value="{{ old('address_contractor', $work->address_contractor) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('address_contractor')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input>
                                        </div>
                                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                            <x-form.input>
                                                <x-slot:label>{{ __('Duración del Trabajo (meses)') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <x-slot:input
                                                    placeholder="Digite la cantidad de meses"
                                                    type="number"
                                                    name="work_duration"
                                                    value="{{ old('work_duration', $work->work_duration) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('work_duration')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input>
                                            <x-form.input>
                                                <x-slot:label>{{ __('Valor aproximado de los servicios en Bs.') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <x-slot:input
                                                    placeholder="Digite el valor aproximado"
                                                    type="number"
                                                    name="value_approximate_services"
                                                    value="{{ old('value_approximate_services', $work->value_approximate_services) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('value_approximate_services')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input>
                                            <x-form.input-date>
                                                <x-slot:label>{{ __('Fecha de Inicio') }}<x-asterisk></x-asterisk></x-slot:label>
                                                <x-slot:input
                                                    x-init="$el._x_flatpickr = flatpickr($el, {minDate: 'today'})"
                                                    name="start_date"
                                                    value="{{ old('start_date', $work->start_date->format('Y-m-d')) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input-date>
                                            <x-form.input-date>
                                                <x-slot:label><i class="fa-solid fa-circle-question" x-tooltip.info.on.mouseenter="'En caso de no indicar la fecha, se da por entendido que la obra aún está en ejecución'"></i> {{ __('Fecha de Conclusión (aprox.)') }}</x-slot:label>
                                                <x-slot:input
                                                    x-init="$el._x_flatpickr = flatpickr($el, {minDate: 'today'})"
                                                    name="completion_date"
                                                    value="{{ old('completion_date', ($work->completion_date) ? $work->completion_date->format('Y-m-d') : $work->completion_date) }}"
                                                ></x-slot:input>
                                                <x-slot:error>
                                                    <x-input-error :messages="$errors->get('completion_date')" class="mt-2" />
                                                </x-slot:error>
                                            </x-form.input-date>
                                        </div>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">
                                                {{ __('Descripción del Proyecto') }}<x-asterisk></x-asterisk>
                                            </span>
                                            <div class="mt-1.5 w-full">
                                            <textarea class="form-textarea w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" autocomplete="off" rows="4"name="description"
                                            placeholder="Describa el proyecto...">{{ old('description', $work->description) }}</textarea>
                                            </div>
                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="card space-y-5 p-4 sm:p-5">

                            <label class="block">
                                @livewire('country-state-city', ['selectedCity' => $work->city_id])
                            </label>

                            {{-- <label class="block">
                                <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Consultores Asociados') }}</span>
                                <select x-init="$el._x_tom = new Tom($el)" name="associate_consultants[]"  class="mt-1.5 w-full" multiple placeholder="Seleccione un Asociado..." autocomplete="off">
                                    <option value="">{{ __('Seleccione un Asociado...') }}</option>
                                    @foreach ($associate_consultants as $associate_consultant)
                                        <option
                                            value="{{$associate_consultant->id }}"
                                            @selected($work->associate_consultants->contains($associate_consultant->id))
                                        >
                                            {{$associate_consultant->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </label> --}}
                            <x-form.select>
                                <x-slot:label>{{ __('Consultores Asociados') }}</x-slot:label>
                                <select
                                    x-init="$el._tom = new Tom($el,{plugins: ['caret_position','input_autogrow','remove_button']})"
                                    class="mt-1.5 w-full"
                                    name="associate_consultants[]"
                                    placeholder="Seleccione los Asociados..."
                                    autocomplete="off"
                                    multiple
                                >
                                    <option value="">{{ __('Seleccione los Asociados...') }}</option>
                                    @foreach ($associate_consultants as $associate_consultant)
                                        <option
                                            value="{{$associate_consultant->id }}"
                                            @selected($work->associate_consultants->contains($associate_consultant->id))
                                        >
                                            {{$associate_consultant->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <x-slot:error>
                                    <x-input-error :messages="$errors->get('associate_consultants[]')" class="mt-2" />
                                </x-slot:error>
                            </x-form.select>
                            <x-form.select>
                                <x-slot:label>{{ __('Servicios') }}<x-asterisk></x-asterisk></x-slot:label>
                                <select
                                    x-init="$el._tom = new Tom($el,{plugins: ['caret_position','input_autogrow','remove_button']})"
                                    class="mt-1.5 w-full"
                                    name="services[]"
                                    placeholder="Elija los Servicios..."
                                    autocomplete="off"
                                    multiple
                                >
                                    <option value="">{{ __('Elija los servicios...') }}</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" @selected($work->services->contains($service->id))>{{ $service->name }}</option>
                                    @endforeach
                                </select>
                                <x-slot:error>
                                    <x-input-error :messages="$errors->get('services[]')" class="mt-2" />
                                </x-slot:error>
                            </x-form.select>
                            {{-- <label class="block">
                                <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Servicios') }}</span>
                                <select x-init="$el._x_tom = new Tom($el)" name="services[]" class="mt-1.5 w-full" multiple placeholder="Elija los Servicios..." autocomplete="off">
                                    <option value="">{{ __('Elija los servicios...') }}</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" @selected($work->services->contains($service->id))>{{ $service->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('services[]')" class="mt-2" />
                            </label> --}}
                        </div>
                    </div>
                </div>
            </form>
        </main>
    @endsection
</x-main>

