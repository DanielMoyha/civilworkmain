<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="grid place-items-center">
            <div class="card mt-20 w-100 max-w-xl p-4 sm:p-5">
                <div class="relative mx-auto -mt-20 h-40 w-72 transition-transform hover:scale-110 lg:h-28 lg:w-80">
                    
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('login')); ?>">
                            <img src="<?php echo e(asset('assets/images/logos/logo-eyserges.svg')); ?>" class="h-28 w-28 rounded-lg" alt="logo" />
                        </a>
                    </div>
                    <p class="text-xl text-center font-semibold text-primary dark:text-accent-light">EYSERGES</p>
                </div>
                <div class="mb-4 text-sm text-gray-600">
                    <?php echo e(__('Antes de continuar, es necesario que confirmes tu cuenta, revisa la bandeja de entrada de tu correo electrónico y presiona el botón de verificación.')); ?>

                </div>
                <?php if(session('status') == 'verification-link-sent'): ?>
                    <div class="my-2 font-medium text-xs text-success">
                        <?php echo e(__('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó cuando se le registró en el sistema.')); ?>

                    </div>
                <?php endif; ?>

                <div class="space-y-4">
                    <div class="flex justify-center space-x-2 pt-4">
                        <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                            <?php echo csrf_field(); ?>

                            <button
                                class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                            >
                                <?php echo e(__('Reenviar correo de verificación')); ?>

                            </button>
                        </form>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button
                                class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                            >
                                <?php echo e(__('Cerrar Sesión')); ?>

                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>