@push('styles')

@endpush
<x-main class="is-sidebar-open">
    @section('sidebar-panel')
        @include('layouts.sidebar-panel.sp-users')
    @endsection

    @section('content')
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">{{ __('Asigne un rol al Usuario') }}</h2>
            </div>

            @if (session('status') === 'user-registered')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                >
                <div x-init="$notification({text:'Usuario registrado exitosamente!',variant:'success',position:'right-top',duration:2200})"></div>
                </p>
            @endif

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-2 lg:gap-6 xl:grid-cols-2">
                <div class="card">
                    <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5 mt-10">
                        <div class="avatar h-20 w-20">
                            <img class="rounded-full"
                                src="https://uybor.uz/borless/uybor/img/user-images/user_no_photo_300x300.png"
                                alt="avatar" />
                        </div>
                        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">{{ $user->name }}</h3>
                        <p class="text-xs+">{{ $user->email }}</p>
                        <form action="{{ route('admin.users.updateRole', [$user->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3">
                                @foreach ($roles as $role)
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="radio"
                                            name="roles[]"
                                            value="{{ $role->id }}" {{ in_array($role->id, $userHasRoles) ? 'checked' : '' }}
                                            id="{{ $role->id }}" />
                                        <p>{{ $role->name }}</p>
                                    </label>
                                @endforeach
                            </div>
                            <div class="mt-6 grid w-full grid-cols-2 gap-2">
                                <button class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90">
                                    Guardar
                                </button>
                                <a href="{{ route('admin.users.edit', [$user->id]) }}"
                                    class="btn bg-error font-medium text-white hover:bg-error-focus hover:shadow-lg hover:shadow-error/50 focus:bg-error-focus focus:shadow-lg focus:shadow-error/50 active:bg-error-focus/90">
                                    Volver
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card grow items-left p-4 sm:p-5">
                    <h3 class="text-sm+ font-bold text-slate-700 dark:text-navy-100 text-center">{{ __('Datos del usuario') }}</h3>
                    <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
                    <h3 class="text-lg font-medium text-slate-700 dark:text-navy-100">{{ $user->name }}</h3>
                    <p class="text-xs+">
                        <span class="font-semibold">{{ __('Usuario: ') }}</span>
                        {{ $user->username }}
                    </p>
                    @php \Carbon\Carbon::setlocale(config('app.locale')); @endphp
                    <p class="text-xs mt-2 font-light">
                        {{ __('Fecha de registro: ') . $user->created_at->translatedFormat('l j \de F Y - h:i A') }}
                    </p>
                    <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grow space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-envelope text-xs"></i>
                            </div>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-phone text-xs"></i>
                            </div>
                            <p>{{ $user->phone }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-city text-xs"></i>
                            </div>
                            <p>{{ $user->city->name . __(' del departamento de ') . $user->city->state->name }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-location-dot text-xs"></i>
                            </div>
                            <p>{{ $user->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @push('scripts')

    @endpush
</x-main>
