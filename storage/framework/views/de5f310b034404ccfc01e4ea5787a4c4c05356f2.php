<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => ['class' => 'is-sidebar-open']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'is-sidebar-open']); ?>
    <?php $__env->startSection('sidebar-panel'); ?>
        <?php echo $__env->make('layouts.sidebar-panel.sp-users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Asigne un rol al Usuario')); ?></h2>
            </div>

            <?php if(session('status') === 'user-registered'): ?>
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                >
                <div x-init="$notification({text:'Usuario registrado exitosamente!',variant:'success',position:'right-top',duration:2200})"></div>
                </p>
            <?php endif; ?>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-2 lg:gap-6 xl:grid-cols-2">
                <div class="card">
                    <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5 mt-10">
                        <div class="avatar h-20 w-20">
                            <img class="rounded-full"
                                src="https://uybor.uz/borless/uybor/img/user-images/user_no_photo_300x300.png"
                                alt="avatar" />
                        </div>
                        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"><?php echo e($user->name); ?></h3>
                        <p class="text-xs+"><?php echo e($user->email); ?></p>
                        <form action="<?php echo e(route('admin.users.updateRole', [$user->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="inline-flex items-center space-x-2">
                                        <input
                                            class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                            type="radio"
                                            name="roles[]"
                                            value="<?php echo e($role->id); ?>" <?php echo e(in_array($role->id, $userHasRoles) ? 'checked' : ''); ?>

                                            id="<?php echo e($role->id); ?>" />
                                        <p><?php echo e($role->name); ?></p>
                                    </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="mt-6 grid w-full grid-cols-2 gap-2">
                                <button class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90">
                                    Guardar
                                </button>
                                <a href="<?php echo e(route('admin.users.edit', [$user->id])); ?>"
                                    class="btn bg-error font-medium text-white hover:bg-error-focus hover:shadow-lg hover:shadow-error/50 focus:bg-error-focus focus:shadow-lg focus:shadow-error/50 active:bg-error-focus/90">
                                    Volver
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card grow items-left p-4 sm:p-5">
                    <h3 class="text-sm+ font-bold text-slate-700 dark:text-navy-100 text-center"><?php echo e(__('Datos del usuario')); ?></h3>
                    <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
                    <h3 class="text-lg font-medium text-slate-700 dark:text-navy-100"><?php echo e($user->name); ?></h3>
                    <p class="text-xs+">
                        <span class="font-semibold"><?php echo e(__('Usuario: ')); ?></span>
                        <?php echo e($user->username); ?>

                    </p>
                    <?php \Carbon\Carbon::setlocale(config('app.locale')); ?>
                    <p class="text-xs mt-2 font-light">
                        <?php echo e(__('Fecha de registro: ') . $user->created_at->translatedFormat('l j \de F Y - h:i A')); ?>

                    </p>
                    <div class="my-4 h-px w-full bg-slate-200 dark:bg-navy-500"></div>
                    <div class="grow space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-envelope text-xs"></i>
                            </div>
                            <p><?php echo e($user->email); ?></p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-phone text-xs"></i>
                            </div>
                            <p><?php echo e($user->phone); ?></p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-city text-xs"></i>
                            </div>
                            <p><?php echo e($user->city->name . __(' del departamento de ') . $user->city->state->name); ?></p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex h-7 w-7 items-center rounded-lg bg-primary/10 p-2 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-location-dot text-xs"></i>
                            </div>
                            <p><?php echo e($user->address); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>

    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>