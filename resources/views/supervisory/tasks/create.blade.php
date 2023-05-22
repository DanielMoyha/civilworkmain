<x-main>
    @include('layouts.sidebar-panel.sp-supervision')

    @section('content')
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Control de Supervisión') }}</h2>
                <x-separate-vertical></x-separate-vertical>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <x-link :href="route('supervision.assignments')">{{ __('Asiganciones de obra') }}</x-link>
                    <x-link :href="route('supervision.assignments.show', [$supervision->id])">{{ __('Obra designada') }}</x-link>
                    <li>{{ __('Tareas de cumplimiento de obra') }}</li>
                </ul>
            </div>
            @if ($supervision->work->completion_date)
                <div class="grid lg:grid-cols-6">
                    <div class="card p-5 col-start-2 col-span-4">
                        <div class="flex flex-col gap-2 text-center items-center">
                            <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                            <p class="font-semibold italic text-sm opacity-80">
                                {{ __('Esta obra está concluida, por lo que ya no puede registrar más tareas.') }}
                            </p>
                            <div class="text-xs opacity-50">
                                <p class="underline">
                                    {{ __('(Si cree que existe alguna inconsistencia, por favor, comuníquese con el Director General.)') }}
                                </p>
                                <span class="text-sm">
                                    <i class="fa-regular fa-hand-point-right px-0.5"></i>
                                    <a href="https://api.whatsapp.com/send?phone=59176513094&text=hola,%20qué%20tal?" target="__blank"><i class="fa-brands fa-whatsapp text-success"></i></a>
                                </span>
                            </div>
                            <a href="{{ route('supervision.assignments.show', [$supervision->id]) }}" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                <i class="fa-solid fa-caret-left mr-1"></i> {{ __('Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
            @else
                @livewire('create-task', ['supervision_id' => $supervision->id])
                @livewire('edit-task', ['supervision_id' => $supervision->id])
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                    @livewire('tasks', ['supervision_id' => $supervision->id])
                    @livewire('completed-tasks', ['supervision_id' => $supervision->id])
                </div>
            @endif
        </main>
    @endsection
</x-main>