<x-main>
    @include('layouts.sidebar-panel.sp-construction')

    @section('content')

    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Asignaciones') }}</h2>
            <x-separate-vertical></x-separate-vertical>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <x-link :href="route('construction.assignments')">{{ __('Asiganciones de obra') }}</x-link>
                <li>{{ __('Lista de asignaciones de obras de construcción') }}</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 sm:gap-5 lg:grid-cols-2 lg:gap-6">
            @forelse ($works as $work)
                @if ($work->status === 1)
                    <div class="max-w-xl">
                        <div class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                            <div x-data="{expandedItem:null}" class="flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                                <div x-data="accordionItem('item-1')" class="overflow-hidden rounded-lg border border-slate-150 dark:border-navy-500">
                                    <div class="flex items-center justify-between bg-slate-150 px-4 py-4 dark:bg-navy-500 sm:px-5">
                                        <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                            <div class="avatar h-10 w-10" x-tooltip.on.mouseenter="'{{ $work->city->state->name.' -> '.$work->city->name }}'">
                                                <div class="is-initial rounded-full bg-success dark:bg-accent-focus uppercase text-white">
                                                    {{ $work->city->state->code }}
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-xs text-slate-300 italic dark:text-navy-500">
                                                    {{ 'hace ' . $work->updated_at->diffForHumans(null, true) }}
                                                </p>
                                                <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                                    {{ $work->name }}
                                                </p>
                                                <p class="text-xs text-slate-500 line-clamp-1 dark:text-navy-300">
                                                    {{ $work->description }}
                                                </p>
                                            </div>
                                        </div>
                                        @if ($work->completion_date)
                                            <a  href="{{ route('construction.materials', [$work->construction->id]) }}"
                                                class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25" x-tooltip.success.on.mouseenter="'{{ __('Obra concluida') }}'" >
                                                <i class="fa-solid fa-eye text-success text-sm+"></i>
                                            </a>
                                        @else
                                            <button
                                                @click="expanded = !expanded"
                                                class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                                            >
                                                <i
                                                    :class="expanded && '-rotate-180'"
                                                    class="fas fa-chevron-down text-sm transition-transform"
                                                ></i>
                                            </button>
                                        @endif
                                    </div>
                                    <div x-collapse x-show="expanded">
                                        <div class="px-4 py-4 sm:px-5">
                                            <div class="flex justify-between">
                                                <p class="text-slate-900 dark:text-navy-200 font-bold pb-2">
                                                    {{ $work->services->count() . __(' SERVICIOS:') }}
                                                </p>
                                                <div class="flex justify-end gap-2 text-xs mb-1">
                                                    <a href="{{ route('construction.materials', [$work->construction->id]) }}" class="btn bg-accent dark:bg-success font-medium text-white hover:dark:bg-success-focus focus:dark:bg-success-focus active:dark:bg-success-focus/90 hover:bg-accent-focus focus:bg-accent-focus active:bg-accent-focus/90 px-2.5">
                                                        <i class="fa-solid fa-clipboard-list pr-2"></i> {{ __('Asignar Materiales') }}
                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                @foreach ($work->services as $service)
                                                    <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                                        <i class="fas fa-check fa-sm"></i>
                                                        <span>{{ $service->name }}</span>
                                                    </div>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="max-w-xl">
                        <div class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                            <div class="border border-slate-150 cursor-not-allowed dark:border-navy-500 rounded-lg">
                                <div class="card">
                                    <div class="bg-slate-150 dark:bg-navy-500 flex items-center justify-between px-4 py-4 sm:px-5 opacity-50">
                                        <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                            <div class="avatar h-10 w-10" x-tooltip.on.mouseenter="'{{ $work->city->state->name.' -> '.$work->city->name }}'">
                                                <div class="is-initial rounded-full bg-success dark:bg-accent-focus uppercase text-white">
                                                    {{ $work->city->state->code }}
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-xs text-slate-300 italic dark:text-navy-500">
                                                    {{ 'hace ' . $work->updated_at->diffForHumans(null, true) }}
                                                    </p>
                                                <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                                    {{ $work->name }}
                                                </p>
                                                <p class="text-xs text-slate-500 line-clamp-1 dark:text-navy-300">
                                                    {{ $work->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute flex inset-0 items-end justify-center w-auto">
                                        <div class="bg-gradient-to-t from-pink-500 p-5 rounded-lg text-center to-transparent via-[#19213266] w-full">
                                            <div>
                                                <span class="dark:text-white font-bold line-clamp-2 text-lg text-slate-700">
                                                    {{ __('OBRA DADA DE BAJA') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div class="col-span-12 flex justify-center mt-3">
                    <h2 class="lg:text-3xl md:text-2xl">{{ __('Aún no tiene designaciones de obras') }}</h2>
                </div>
            @endforelse
        </div>
    </main>
    @endsection
</x-main>

