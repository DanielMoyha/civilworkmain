<x-main class="">
    @section('sidebar-panel')
        @include('layouts.sidebar-panel.sp-works')
    @endsection

    @section('content')
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6 noPrint">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Trabajos - Obras') }}</h2>
                <span>
                    <button @click="window.print();" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"
                            />
                        </svg>
                    </button>
                </span>
                <x-separate-vertical></x-separate-vertical>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <x-link :href="route('admin.works.index')">{{ __('Obras') }}</x-link>
                    <li>
                        <span>{{ __('Ver detalles de obra') }}</span>
                    </li>
                    {{-- <li>
                        <button @click="window.print();" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"
                                />
                            </svg>
                        </button>
                    </li> --}}
                </ul>
            </div>

            <div class="grid grid-cols-1">
                <div class="card px-5 py-12 sm:px-18">
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="text-center sm:text-left sm:w-10/12">
                            <h2 class="text-xl font-semibold uppercase text-primary dark:text-accent-light">
                                {{ $work->name }}
                            </h2>
                            <div class="space-y-1 pt-2">
                                <p><span class="font-bold">{{ __('Contratante: ') }}</span> {{ $work->name_contractor }}</p>
                                <p><span class="font-bold">{{ __('Dirección: ') }}</span> {{ $work->address_contractor }}</p>
                                <p><span class="font-bold">{{ __('Duración del Trabajo: ') }}</span> {{ $work->work_duration . __(' Meses') }}</p>
                                <p><span class="font-bold">{{ __('Fecha de Inicio: ') }}</span> {{ $work->start_date->format('d-m-Y') }}</p>
                                <p>
                                    <span class="font-bold">{{ __('Fecha de Conclusión: ') }}</span>
                                    @if ($work->completion_date)
                                        {{ $work->completion_date->format('d-m-Y') }}
                                    @else
                                        <span class="badge rounded-full border border-success text-success">{{ __('En ejecución') }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="mt-4 text-center sm:m-0 sm:text-right w-auto">
                            <h2 class="text-sm+ font-semibold uppercase text-primary dark:text-accent-light">
                                {{ $work->city->name .' / '. $work->city->state->name }}
                            </h2>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="text-center sm:text-left">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100">{{ __('Descripción del Trabajo') }}</p>
                            <div class="space-y-1 pt-2">
                                <p>{{ $work->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500  noPrint"></div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-1">
                        <div>
                            <p class="font-bold text-lg">Lista de Servicios:</p>
                            @forelse ($work->services as $service)
                                <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                    <i class="fas fa-check fa-sm"></i>
                                    <span>{{ $service->name }}</span>
                                </div>
                            @empty
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">
                                    {{ __('Esta obra no tiene servicios registrados...') }}
                                </p>
                            @endforelse
                        </div>
                        <div>
                            <p class="font-bold text-lg">Consultores Asociados:</p>
                            @forelse ($work->associate_consultants as $associate_consultant)
                                <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                    <i class="fas fa-check fa-sm"></i>
                                    <span>{{ $associate_consultant->name }}</span>
                                </div>
                            @empty
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">Este trabajo no cuenta con consultores asociados...</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500 noPrint"></div>

                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="mt-4 text-center sm:m-0 sm:text-left">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100">{{ __('Valor aproximado de los servicios') }}</p>
                            <div class="space-y-1 pt-2">
                                <p class="text-lg text-primary dark:text-accent-light">
                                    {{ __('Total: ') }} <span class="font-medium text-sm+">{{ __('Bs. ') . $work->value_approximate_services }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="items-end noPrint">
                            <a href="{{ route('admin.works.index') }}" class="btn rounded-full bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                            {{ __('Volver') }}
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
</x-main>

