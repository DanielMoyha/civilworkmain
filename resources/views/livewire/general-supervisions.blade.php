<div>
    <div class="flex items-center justify-between mt-10">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            {{ __('Lista de supervisiones en ejecución') }}
        </h2>
        <div class="flex">
            <div class="flex items-center" x-data="{isInputActive:false}">
                <label class="block">
                    <input
                        x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                        :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                        class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                        placeholder="Buscar aquí..."
                        type="search"
                        wire:model='search'
                    />
                </label>
                <button
                    @click="isInputActive = !isInputActive"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="card mt-1 shadow-xl">
        <div class="is-scrollbar-show min-w-full overflow-x-auto  rounded-lg">
            <table class="is-hoverable w-full text-left">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            {{ __('N°') }}
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            {{ __('Supervisión') }}
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            {{ __('Encargado') }}
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            {{ __('Tareas') }}
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            {{ __('Seguimiento') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($allSupervisions as $supervision)
                        <tr class="@if($supervision->work->status === 0) bg-error/15 hover:!border-error hover:text-error @endif border border-transparent border-b-slate-200 dark:border-b-navy-500" wire:loading.class='opacity-40'>
                            <td class="text-center px-4 py-3 sm:px-5">{{ $loop->iteration }}</td>

                            @if ($supervision->work->status === 0)
                                <td class="italic px-4 py-3 sm:px-5 tracking-wide">
                                    <span class="cursor-not-allowed">
                                        {{ $supervision->name }}
                                    </span>
                                </td>
                            @else
                                @if ($supervision->work->completion_date)
                                    <td class=" px-4 py-3 sm:px-5">
                                        <span class="badge rounded-full border border-success bg-success text-white" x-tooltip.success.on.mouseenter="'Obra concluida'">
                                            <i class="fa-solid fa-circle-check text-sm+"></i>
                                        </span>
                                        <a href="{{ route('admin.works.show', [$supervision->work->id]) }}">
                                            {{ $supervision->name }}
                                        </a>
                                    </td>
                                @else
                                    @if ($supervision->work->user->is_active !== 1)
                                        <td class="px-4 py-3 sm:px-5">
                                            <span class="badge rounded-full border border-info bg-info text-white" x-tooltip.info.on.mouseenter="'Obra en Pausa'">
                                                <i class="fa-solid fa-circle-pause text-sm+"></i>
                                            </span>
                                            <a href="{{ route('admin.works.show', [$supervision->work->id]) }}">
                                                {{ $supervision->name }}
                                            </a>
                                        </td>
                                    @else
                                        <td class="px-4 py-3 sm:px-5">
                                            <span class="badge rounded-full border border-warning bg-warning text-white cursor-help" x-tooltip.warning.on.mouseenter="'En ejecución'">
                                                <i class="fa-solid fa-swatchbook text-sm+"></i>
                                            </span>
                                            <a href="{{ route('admin.works.show', [$supervision->work->id]) }}">
                                                {{ $supervision->name }}
                                            </a>
                                        </td>
                                    @endif
                                @endif
                            @endif

                            @if ($supervision->work->user->is_active === 0)
                                <td class=" px-4 py-3 sm:px-5">
                                    <span class="badge rounded-full border border-error bg-error text-white cursor-help" x-tooltip.error.on.mouseenter="'Usuario deshabilitado'">
                                        <i class="fa-solid fa-user-large-slash text-xs"></i>
                                    </span>
                                    {{ $supervision->work->user->name }}
                                </td>
                            @else
                                <td class=" px-4 py-3 sm:px-5">{{ $supervision->work->user->name }}</td>
                            @endif

                            @if ($supervision->work->status === 0)
                                <td class="dark:text-white decoration-double hover:text-error px-4 py-3 sm:px-5 text-base text-center tracking-wider underline uppercase" colspan="2">
                                    <i class="fa-solid fa-circle-info text-info" x-tooltip.info.on.mouseenter="'Se dio de baja en fecha: {{ $supervision->work->updated_at->format('d-m-Y') }}'"></i> {{ __('OBRA DADA DE BAJA') }}
                                </td>
                            @else
                                @if ($supervision->controls()->exists())
                                    {{-- <td class="text-center text-xs+ px-4 py-3 sm:px-5">
                                        <div>{{ __('Total Tareas: ') . $supervision->controls->count()}}</div>
                                    </td> --}}
                                    <td class="text-left text-xs px-4 py-3 sm:px-5">
                                        <div class="font-bold text-sm">{{ __('Tareas: ') . $supervision->controls->count()}}</div>
                                        <div>{{ __('Realizadas: ') . $supervision->controls()->whereNotNull('completed_at')->count()}}</div>
                                        <div>{{ __('Pendientes: ') . $supervision->controls()->whereNull('completed_at')->count()}}</div>
                                    </td>
                                @else
                                    <td class="text-center font-bold text-xs italic opacity-40 px-4 py-3 sm:px-5">
                                        {{ __('Sin tareas aún') }}
                                    </td>
                                @endif

                                <td class="text-center px-4 py-3 sm:px-5">
                                    <div class="flex flex-wrap gap-2 py-1">
                                        @forelse ($supervision->follow_ups as $follow_up)
                                        <a href="{{ Storage::url('followUp/'.$follow_up->image) }}" target="_blank">
                                            <img
                                                class="aspect-square rounded-lg object-cover object-center h-20"
                                                src="{{ Storage::url('followUp/'.$follow_up->image) }}"
                                                alt="a" target="_blank"
                                            />
                                        </a>
                                        @empty
                                            <p class="font-bold text-xs italic opacity-40">{{ __('Sin seguimiento realizado...') }}</p>
                                        @endforelse
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="h-8 w-8 text-cool-gray-400 text-3xl"><i class="fa-solid fa-inbox"></i></span>
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">{{ __('Supervisiones no encontradas...') }}</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {!! $allSupervisions->links() !!}
    </div>
</div>
