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
                
            </div>

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 grid lg:col-span-8">
                    <div class="card">
                        <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                            <div class="flex items-center space-x-2">
                                <div
                                    class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                                <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">Crear un Nuevo Rol</h4>
                            </div>
                        </div>
                        <form action="<?php echo e(route('admin.roles.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="space-y-4 p-4 sm:p-5">
                                <label class="block">
                                    <span>Nombre</span>
    
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Ingrese el nombre del Rol" type="text" name="name" id="name"/>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger">
                                            <?php echo e($message); ?>

                                        </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <label class="block">
                                    <span>Descripción</span>
    
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Describa brevemente el rol" type="text" name="description" id="description"/>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger">
                                            <?php echo e($message); ?>

                                        </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <label class="block mt-4">
                                    <span>Seleccione los permisos correspondiente a este rol</span>
                                    <div class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-3">
                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label class="inline-flex items-center space-x-2">
                                                <input
                                                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                                    type="radio"
                                                    name="permissions[]"
                                                    value="<?php echo e($permission->id); ?>"
                                                    id="<?php echo e($permission->id); ?>"
                                                />
                                                <p><?php echo e($permission->description); ?></p>
                                            </label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </label>

                                <div class="mt-6 grid w-full grid-cols-2 gap-2">
                                    <button class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90">
                                        Guardar
                                    </button>
                                    <a href="<?php echo e(route('admin.roles.index')); ?>"
                                        class="btn bg-error font-medium text-white hover:bg-error-focus hover:shadow-lg hover:shadow-error/50 focus:bg-error-focus focus:shadow-lg focus:shadow-error/50 active:bg-error-focus/90">
                                        Volver
                                    </a>
                                </div>
                            </div>
                        </form>
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
<?php /**PATH /var/www/html/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>