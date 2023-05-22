<x-guest-layout>
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="{{ route('refresh') }}" class="flex items-center space-x-2">
            <img class="h-12 w-12" src="{{ asset('assets/images/logos/logo-eyserges.svg') }}" alt="logo" />
            <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">{{ __('EYSERGES') }}</p>
        </a>
    </div>
    <div class="hidden w-full place-items-center lg:grid">
        <div class="w-full max-w-2xl p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="{{ asset('assets/images/5138437.svg') }}"
                alt="image" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled" src="{{ asset('assets/images/5138437.svg') }}"
                alt="image" />
        </div>
    </div>
    <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('assets/images/logos/logo-eyserges.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">{{ __('Bienvenido') }}</h2>
                    <p class="text-slate-400 dark:text-navy-300">{{ __('Por favor Inicie Sesión para continuar') }}</p>
                </div>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="my-1 text-success" :status="session('status')" />
            <div class="mt-16">
                <form method="POST" action="{{ route('login') }}" id="form" autocomplete="off">
                    @csrf
                    <label class="relative flex">
                        <input id="username" name="username" type="text"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            value="{{ old('username') }}" placeholder="Nombre de Usuario" required autofocus />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </label>
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    <label class="relative mt-4 flex">
                        <input id="password" name="password" type="password"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Password" required autocomplete="current-password" />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-input-error :messages="$errors->get('is_active')" class="mt-2" />
                    <div class="mt-4 flex flex-wrap items-center justify-between space-x-2 space-y-3">
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" name="remember"
                                class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                            <span class="line-clamp-1">{{ __('Mantener Sesión Iniciada') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">{{ __('¿Olvidó su contraseña?') }}</a>
                        @endif
                    </div>
                    <button
                        type="submit"
                        class="btn mt-5 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                        x-data="{ loading: false }"
                        x-bind:class="{ 'opacity-75': loading }"
                        x-on:click="loading = true; document.getElementById('form').submit();"
                        x-html="loading ? `<div class='spinner is-elastic h-7 w-7 animate-spin rounded-full border-[3px] border-success border-r-transparent mr-3'></div> Ingresando...` : 'Ingresar'"
                        x-bind:disabled="loading"
                    >{{ __('Ingresar') }}</button>
                </form>
            </div>
        </div>
        <div class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <span>{{ __('Derechos Reservados') }} &#169;</span>
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <span>{{ date('Y') }}</span>
        </div>
    </main>
</x-guest-layout>
