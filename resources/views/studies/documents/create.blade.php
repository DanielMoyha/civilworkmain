@push('styles')
    <style>
        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 7px 15px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #4F46E5;
        }
    </style>
@endpush
<x-main>
    @include('layouts.sidebar-panel.sp-study')

    @section('content')

        @if (session('status') === 'upload-document')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
            <div x-init="$notification({ text: 'Documentos subidos correctamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
            </p>
        @endif
        @if (session('status') === 'upload-document-error')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
            <div x-init="$notification({ text: 'Vuelva a intentarlo, ocurrió un Error!', variant: 'error', position: 'right-top', duration: 2200 })"></div>
            </p>
        @endif
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Cargar Documentos') }}</h2>
                <x-separate-vertical></x-separate-vertical>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <x-link :href="route('study.assignments')">{{ __('Documentos') }}</x-link>
                    <li>{{ __('Documentos de los estudios de obra') }}</li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-1">

                <div class="card p-5">
                    <div class="lg:flex lg:items-center lg:justify-between lg:text-right text-xs">
                        <h2 class="font-bold text-sm+ uppercase sm:text-center">{{ __('Detalles de la obra') }}</h2>

                        <div class="lg:shrink-0 md:my-1 md:text-left sm:text-center space-y-1.5">
                            <a href="{{ route('study.assignments.show', [$study->id]) }}" class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                <i class="fa-solid fa-circle-plus mr-2"></i> {{ __('Estudios Adicionales') }}
                            </a>
                            <a href="{{ route('study.assignments') }}" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">{{ __('Volver') }}</a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <p class="text-sm font-medium italic opacity-50">{{ __('Nombre de la Obra') }}</p>
                        <p>{{ $study->work->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50">{{ __('Dirección donde se desarrollará la obra (municipio / dpto.)') }}</p>
                        <p><i class="fa-solid fa-map-location-dot"></i> {{ $study->work->city->name .' / '. $study->work->city->state->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50">{{ __('Fecha de Inicio') }}</p>
                        <p><i class="fa-solid fa-calendar-check"></i> {{ $study->work->start_date->format('d-m-Y') }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50">{{ __('Fecha de Conclusión') }}</p>
                        @if ($study->work->completion_date)
                            <p><i class="fa-solid fa-calendar-check"></i> {{ $study->work->completion_date->format('d-m-Y') }} <span class="font-semibold italic text-success text-xs opacity-75">{{ __('(concluido)') }}</span></p>
                        @else
                            <p class="font-semibold italic text-info text-sm+ opacity-75">{{ __('* En Ejecución...') }}</p>
                        @endif
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50">{{ __('Descripción de la obra') }}</p>
                        <p>{{ $study->work->description }}</p>
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50 mb-1">{{ __('Servicios a desarrollar') }}</p>
                        @forelse ($study->work->services as $service)
                            <p><i class="fa-solid fa-check"></i> {{ $service->name }}</p>
                        @empty
                            <div class="flex justify-center items-center gap-3">
                                <p class="mt-2 italic font-bold text-sm+">
                                    <i class="fa-solid fa-inbox"></i> {{ __('Sin servicios designados aún...') }}
                                </p>
                            </div>
                        @endforelse
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50">{{ __('Estudios Extra') }}</p>
                        @forelse ($study->types as $type)
                            <p><i class="fa-solid fa-check"></i> {{ $type->name }}</p>
                        @empty
                        <div class="flex justify-center items-center gap-3">
                            <p class="mt-2 italic font-bold text-sm+">
                                <i class="fa-solid fa-inbox"></i> {{ __('Este estudio no tiene otros estudios extras...') }}
                            </p>
                        </div>
                        @endforelse
                    </div>
                </div>
                <div>
                    <div class="card p-5">
                        @if ($study->work->completion_date)
                            <div class="flex flex-col gap-2 text-center">
                                <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                                <p class="font-semibold italic text-sm opacity-80">
                                    {{ __('Esta obra está concluida, por lo que ya no puede registrar nuevos estudios extras para dicha obra.') }}
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
                            </div>
                        @else
                            <form
                                method="POST"
                                action="{{ route('study.studies.upload.documents.store', [$study->id]) }}" enctype="multipart/form-data"
                                x-data="{ submitting: false }"
                                x-on:submit="submitting = true; $nextTick(() => $refs.submitBtn.innerText = 'Guardando...')"
                            >
                                @csrf
                                <input type="hidden" value="{{ $study->id }}" name="study_id">
                                {{-- <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">{{ __('Nombre') }}</span>
                                    <input type="text" name="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </label> --}}
                                <label class="block">
                                    <p class="font-medium text-slate-600 dark:text-navy-100">{{ __('Seleccione los documentos correspondientes ') }} <p class="text-sm italic opacity-50">{{ __('(csv, xls, pdf, docx) Max: 2MB') }}</p></p>
                                    <input type="file" name="files[]" multiple accept=".doc,.docx,.pdf,.csv,.xls,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="mt-2">
                                    <x-input-error :messages="$errors->get('files')" class="mt-2" />
                                </label>
                                <button
                                    type="submit"
                                    x-bind:class="{ 'opacity-50': submitting }"
                                    x-bind:disabled="submitting"
                                    x-ref="submitBtn"
                                    class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90 mt-4"
                                ><i class="fa-solid fa-circle-check pr-1"></i>{{ __('Guardar') }}</button>
                            </form>
                        @endif
                    </div>
                    <div class="card p-5 mt-10">
                        <h2 class="font-bold text-sm+ uppercase">{{ __('Documentos subidos para esta obra') }}</h2>
                        <div class="gap-8 grid grid-cols-1 md:grid-cols-3 mt-4 sm:grid-cols-2">
                            @forelse ($documents as $document)
                                <a href="{{ asset('uploads') . '/' . $document->file }}" target="_blank">
                                    <img src="{{ asset('assets/images/icons/documentFile.png') }}" alt="" width="40" height="40">
                                    <span class="line-clamp-1">{{ $document->name }}</span>
                                </a>
                                {{-- <iframe src="{{ asset('uploads') . '/' . $document->file }}" height="200" width="300"></iframe> --}}
                                {{-- <li>{{ $document->file }}</li> --}}
                            @empty
                                <div class="lg:col-span-10 lg:text-center md:col-span-9 md:text-center sm:col-span-8">
                                    <p class="mt-3 italic font-bold text-sm+ underline">
                                        <i class="fa-solid fa-inbox pr-1"></i> {{ __('Este estudio aún no tiene documentos subidos') }}
                                    </p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div>
                
            </div>
        </main>

    @endsection
</x-main>

