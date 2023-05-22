@push('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>
@endpush
<x-main>
    @include('layouts.sidebar-panel.sp-supervision')

    @section('content')
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Supervisión de Obra') }}</h2>
                <x-separate-vertical></x-separate-vertical>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <x-link :href="route('supervision.assignments')">{{ __('Asignaciones de obra') }}</x-link>
                    <x-link :href="route('supervision.assignments.show', [$supervision->id])">{{ __('Obra designada') }}</x-link>
                    <li>{{ __('Seguimiento de obras') }}</li>
                </ul>
            </div>

            @if ($supervision->work->completion_date)
                <div class="grid lg:grid-cols-6">
                    <div class="card p-5 col-start-2 col-span-4">
                        <div class="flex flex-col gap-2 text-center items-center">
                            <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                            <p class="font-semibold italic text-sm opacity-80">
                                {{ __('Esta obra está concluida, por lo que ya no puede realizar más seguimientos.') }}
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
                {{-- @livewire('create-followup', ['supervision_id' => $supervision->id]) --}}
                @if (session('status') === 'followUp-error')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    <div x-init="$notification({ text: 'Ocurrió un error!', variant: 'error', position: 'right-top', duration: 2200 })"></div>
                    </p>
                @endif
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8">
                        <form
                            action="{{ route('supervision.follow-ups.store', $supervision->id) }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="supervision_id" value="{{ $supervision->id }}">
                            <div class="card">
                                <div class="tabs flex flex-col">
                                    <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100 space-x-2 dark:text-primary">
                                            <span><i class="fa-solid fa-layer-group text-base"></i></span>
                                            <span> {{ __('Registro de Avances') }}</span>
                                        </h2>
                                        <div class="flex justify-center space-x-2">
                                            <a href="{{ route('supervision.assignments.show', [$supervision->id]) }}"
                                                class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                            >{{ __('Cancelar') }}</a>
                                            <button
                                                type="submit"
                                                class="btn min-w-[7rem] rounded-full bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                            >
                                                {{ __('Guardar') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-content p-4 sm:p-5">
                                        <div class="space-y-5">
                                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                <label class="block">
                                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Descripción de la Imagen') }}<x-asterisk></x-asterisk></span>
                                                    <input
                                                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                    placeholder="Escriba el nombre de la entidad contratante"
                                                    type="text"
                                                    name="description"
                                                    value="{{ old('description') }}"
                                                    />
                                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                                </label>
                                                <label>
                                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Fecha') }}<x-asterisk></x-asterisk></span>
                                                    <span class="relative mt-1.5 flex">
                                                        <input
                                                            x-init="$el._x_flatpickr = flatpickr($el)"
                                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Seleccione una fecha..."
                                                            type="date"
                                                            name="date"
                                                            value="{{ old('date') }}"
                                                        />
                                                        <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="h-5 w-5 transition-colors duration-200"
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor"
                                                                stroke-width="1.5"
                                                            >
                                                                <path
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                                />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                                                </label>
                                            </div>
                                            <div>
                                                <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Imagen') }}<x-asterisk></x-asterisk></span>
                                                <div class="mt-1.5 w-full filepond fp-bg-filled">
                                                    <input type="file" name="image" id="image" accept="image/*">
                                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4">
                        <div class="card p-4">
                            <div>
                                <p class="font-semibold text-base text-center">{{ __('Último Seguimiento') }}</p>
                                <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            </div>
                            @if ($lastFollowUp)
                                <div class="flex flex-col">
                                    <img
                                        class="h-44 w-full rounded-2xl object-cover object-center"
                                        src="{{ Storage::url('followUp/'.$lastFollowUp->image) }}"
                                        alt="image"
                                    />
                                    <div class="card -mt-8 grow rounded-2xl p-4">
                                        <div>
                                            <a href="{{ route('supervision.assignments.show', [$supervision->id]) }}"
                                                class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light" target="_blank"
                                                >{{ $lastFollowUp->supervision->work->name }}</a>
                                        </div>
                                        <p class="mt-2 grow line-clamp-3">
                                            {{ $lastFollowUp->description }}
                                        </p>
                                        <div class="mt-4 flex items-center justify-between">
                                            <span class="flex items-center space-x-2 text-xs hover:text-slate-800 dark:hover:text-navy-100">
                                                <div class="avatar h-6 w-6">
                                                    <img class="rounded-full" src="{{ asset('assets/images/icons/avatar-user.jpg') }}" alt="avatar" />
                                                </div>
                                                <span class="line-clamp-1">
                                                    {{ $lastFollowUp->supervision->work->user->name }}
                                                </span>
                                            </span>
                                            <p class="flex shrink-0 items-center space-x-1.5 text-slate-400 dark:text-navy-300">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                    />
                                                </svg>
                                                <span class="text-xs">{{ \Carbon\Carbon::parse($lastFollowUp->supervision->date)->format('d/m/Y') }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="font-light italic text-center text-xs+">
                                    {{ __('Aún no se realizaron seguimientos anteriores...') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

        </main>
    @endsection

    @push('scripts')
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
        <script>
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
            const labels_es_ES = {
            labelIdle: 'Arrastra y suelta tus archivos o <span class = "filepond--label-action"> Examinar <span>',
            labelInvalidField: "El campo contiene archivos inválidos",
            labelFileWaitingForSize: "Esperando tamaño",
            labelFileSizeNotAvailable: "Tamaño no disponible",
            labelFileLoading: "Cargando",
            labelFileLoadError: "Error durante la carga",
            labelFileProcessing: "Cargando",
            labelFileProcessingComplete: "Carga completa",
            labelFileProcessingAborted: "Carga cancelada",
            labelFileProcessingError: "Error durante la carga",
            labelFileProcessingRevertError: "Error durante la reversión",
            labelFileRemoveError: "Error durante la eliminación",
            labelTapToCancel: "toca para cancelar",
            labelTapToRetry: "tocar para volver a intentar",
            labelTapToUndo: "tocar para deshacer",
            labelButtonRemoveItem: "Eliminar",
            labelButtonAbortItemLoad: "Abortar",
            labelButtonRetryItemLoad: "Reintentar",
            labelButtonAbortItemProcessing: "Cancelar",
            labelButtonUndoItemProcessing: "Deshacer",
            labelButtonRetryItemProcessing: "Reintentar",
            labelButtonProcessItem: "Cargar",
            labelMaxFileSizeExceeded: "El archivo es demasiado grande",
            labelMaxFileSize: "El tamaño máximo del archivo es {filesize}",
            labelMaxTotalFileSizeExceeded: "Tamaño total máximo excedido",
            labelMaxTotalFileSize: "El tamaño total máximo del archivo es {filesize}",
            labelFileTypeNotAllowed: "Archivo de tipo no válido",
            fileValidateTypeLabelExpectedTypes: "Espera {allButLastType} o {lastType}",
            imageValidateSizeLabelFormatError: "Tipo de imagen no compatible",
            imageValidateSizeLabelImageSizeTooSmall: "La imagen es demasiado pequeña",
            imageValidateSizeLabelImageSizeTooBig: "La imagen es demasiado grande",
            imageValidateSizeLabelExpectedMinSize: "El tamaño mínimo es {minWidth} × {minHeight}",
            imageValidateSizeLabelExpectedMaxSize: "El tamaño máximo es {maxWidth} × {maxHeight}",
            imageValidateSizeLabelImageResolutionTooLow: "La resolución es demasiado baja",
            imageValidateSizeLabelImageResolutionTooHigh: "La resolución es demasiado alta",
            imageValidateSizeLabelExpectedMinResolution: "La resolución mínima es {minResolution}",
            imageValidateSizeLabelExpectedMaxResolution: "La resolución máxima es {maxResolution}",
        };
            FilePond.setOptions(labels_es_ES);
            FilePond.registerPlugin(FilePondPluginImagePreview);
            // Get a reference to the file input element
            const inputElement = document.querySelector('input[type="file"]');

            // Create a FilePond instance
            const pond = FilePond.create(inputElement, {
                acceptedFileTypes: ['image/*'],
                maxFileSize: '5MB'
            });

            FilePond.setOptions({
                server: {
                    process: '/tmp-upload',
                    revert: '/tmp-delete',
                    headers : {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
            });
        </script>
    @endpush
</x-main>