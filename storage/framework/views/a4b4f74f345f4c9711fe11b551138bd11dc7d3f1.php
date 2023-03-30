@<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    

    <?php $__env->startSection('content'); ?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Información Personal')); ?></h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="<?php echo e(route('profile.edit')); ?>"
                            ><?php echo e(__('Perfil de Usuario')); ?></a
                        >
                    </li>
                </ul>
            </div>
            <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
                <?php echo csrf_field(); ?>
            </form>

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <form method="post" action="<?php echo e(route('profile.update')); ?>" id="form-profile">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>
                        <div class="card">
                            <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                                <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                    <?php echo e(__('Configuración de la Cuenta')); ?>

                                </h2>
                                <div class="flex justify-center space-x-2">
                                    <a href="<?php echo e(route('dashboard')); ?>"
                                        class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                                    >
                                        <?php echo e(__('Volver')); ?>

                                    </a>
                                    <button
                                        class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                        x-data="{loading:false}"
                                        x-on:click="loading=true; document.getElementById('form-profile').submit();"
                                        x-html="loading ? `<div class='spinner is-elastic h-3 w-3 animate-spin rounded-full border-[3px] border-success border-r-transparent mr-2'></div> Guardar...` : '<?php echo e(__('Guardar')); ?>'" class="disabled:opacity-50"
                                        x-bind:disabled="loading"
                                    >
                                        <?php echo e(('Guardar')); ?>

                                    </button>
                                    <?php if(session('status') === 'profile-updated'): ?>
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600"
                                        ><div x-init="$notification({text:'Datos Actualizados',variant:'success',position:'right-top',duration:2200})"></div></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="p-4 sm:p-5">
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Estado de la Cuenta:')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <?php if($user->is_active === 1): ?>
                                                <span><?php echo e(__('Actualmente usted es un usuario:')); ?></span>
                                                <div class="badge bg-success text-white shadow-soft shadow-success/50 mx-2">
                                                    <?php echo e(__('ACTIVO')); ?>

                                                </div>
                                            <?php else: ?>
                                                <span><?php echo e(__('Actualmente usted es un usuario')); ?></span>
                                                <div class="badge bg-error text-white shadow-soft shadow-error/50 mx-2">
                                                    <?php echo e(__('INACTIVO')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <span class="font-normal"><?php echo e(__('Su rol actual en la empresa es:')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <span class="font-bold uppercase">
                                                <?php echo e($user->roles()->first()->name); ?>

                                            </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Nombre Completo')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="name"
                                                name="name"
                                                value="<?php echo e(old('name', $user->name)); ?>"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter name"
                                                type="text"
                                                readonly
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-regular fa-user text-base"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('name'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Nombre de Usuario')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="username"
                                                name="username"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter full name"
                                                type="text"
                                                value="<?php echo e(old('username', $user->username)); ?>"
                                                readonly
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-user-check text-base"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('username'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('username')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Correo Electrónico')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="email"
                                                name="email"
                                                value="<?php echo e(old('email', $user->email)); ?>"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter email address"
                                                type="text"
                                                readonly
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-regular fa-envelope text-base"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Ciudad')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="city_id"
                                                name="city_id"
                                                value="<?php echo e(old('city_id', $user->city->state->name .'/'. $user->city->name )); ?>"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                type="text"
                                                readonly
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-city"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('city_id'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('city_id')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Número de Teléfono')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="phone"
                                                name="phone"
                                                value="<?php echo e(old('phone', $user->phone)); ?>"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Digite su teléfono"
                                                type="text"
                                                maxlength="8"
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-phone text-base"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('phone'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('phone')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Residencia Actual')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="address"
                                                name="address"
                                                value="<?php echo e(old('address', $user->address)); ?>"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter phone number"
                                                type="text"
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('address'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('address')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                </div>
                            </div>
                            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                                <div>
                                    <p class="text-sm mt-2 text-gray-800">
                                        <?php echo e(__('Su dirección de correo electrónico no está verificada.')); ?>


                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <?php echo e(__('Haga clic aquí para volver a enviar el correo electrónico de verificación.')); ?>

                                        </button>
                                    </p>

                                    <?php if(session('status') === 'verification-link-sent'): ?>
                                        <p class="mt-2 font-medium text-sm text-success">
                                            <?php echo e(__('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
                <!--PASSWORD-->
                <div class="col-span-12 lg:col-span-4">
                    <form method="post" action="<?php echo e(route('password.update')); ?>" id="form-profile-password">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="card p-4 sm:p-5">
                            <div class="flex items-center space-x-4">
                                <div class="avatar h-14 w-14">
                                    <img class="rounded-full" src="https://uybor.uz/borless/uybor/img/user-images/user_no_photo_300x300.png" alt="avatar" />
                                </div>
                                <div>
                                    <?php
                                        \Carbon\Carbon::setlocale(config('app.locale'));
                                    ?>
                                    <h3 class="text-base font-medium text-slate-700 dark:text-navy-100"><?php echo e($user->name); ?></h3>
                                    <p class="text-xs+"><?php echo e(__('Registrado: '). $user->created_at->translatedFormat('l j \\de F Y')); ?></p>
                                </div>
                            </div>
                            <ul class="mt-6 space-y-1.5 font-inter font-medium">
                                <li>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Contraseña Actual')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="current_password"
                                                name="current_password"
                                                autocomplete="current-password"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Ingresa tu contraseña actual"
                                                type="password"
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->updatePassword->get('current_password'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->updatePassword->get('current_password')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                </li>
                                <li>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Nueva Contraseña')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="password"
                                                name="password"
                                                autocomplete="new-password"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Ingresa tu contraseña actual"
                                                type="password"
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->updatePassword->get('password'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->updatePassword->get('password')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                </li>
                                <li>
                                    <label class="block">
                                        <span class="font-medium"><?php echo e(__('Confirmar Contraseña')); ?></span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                autocomplete="new-password"
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Ingresa tu contraseña actual"
                                                type="password"
                                            />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                            >
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                        </span>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->updatePassword->get('password_confirmation'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->updatePassword->get('password_confirmation')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </label>
                                </li>
                            </ul>
                            <div>

                                <button class="btn min-w-full mt-3 rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                        x-data="{loading:false}"
                                        x-on:click="loading=true; document.getElementById('form-profile-password').submit();"
                                        x-html="loading ? `<div class='spinner is-elastic h-3 w-3 animate-spin rounded-full border-[3px] border-success border-r-transparent mr-2'></div> Espere por favor...` : '<?php echo e(__('Actualizar Contraseña')); ?>'" class="disabled:opacity-50"
                                        x-bind:disabled="loading"
                                >
                                    <?php echo e(('Actualizar Contraseña')); ?>

                                </button>
                                <?php if(session('status') === 'password-updated'): ?>
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                    >
                                    <div x-init="$notification({text:'Contraseña Actualizada',variant:'success',position:'right-top',duration:2200})"></div>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/profile/edit.blade.php ENDPATH**/ ?>