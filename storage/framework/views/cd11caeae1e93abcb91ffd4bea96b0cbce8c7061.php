<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('layouts.sidebar-panel.sp-supervision', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('content'); ?>


    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Detalles de Obra')); ?></h2>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.separate-vertical','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('separate-vertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => route('study.assignments')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('study.assignments'))]); ?><?php echo e(__('Asiganciones de obra')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <li><?php echo e(__('Ver detalles de la obra designada')); ?></li>
            </ul>
        </div>


        <div class="grid grid-cols-1">
            <div class="card px-5 py-8 sm:px-18">
                <div class="flex justify-end gap-3">
                    <a href="<?php echo e(route('supervision.assignments.tasks', [$supervision->id])); ?>" class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"><i class="fa-solid fa-list-check mr-2"></i> Registrar Tareas</a>
                    <a href="<?php echo e(route('supervision.assignments.follow-ups', [$supervision->id])); ?>" class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"><i class="fa-solid fa-images mr-2"></i>Realizar Seguimiento</a>
                    <a href="<?php echo e(route('supervision.assignments')); ?>" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-success-focus/90"><i class="fa-solid fa-caret-left mr-2"></i>Volver</a>
                </div>
                <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left w-10/12">
                        <h2 class="text-xl font-semibold uppercase text-primary dark:text-accent-light">
                            <?php echo e($supervision->work->name); ?>

                        </h2>
                        <div class="space-y-1 pt-2">
                            <p><span class="font-bold"><?php echo e(__('Duración del Trabajo: ')); ?></span> <?php echo e($supervision->work->work_duration . __(' Meses')); ?></p>
                            <p><span class="font-bold"><?php echo e(__('Fecha de Inicio: ')); ?></span> <?php echo e($supervision->work->start_date->format('d-m-Y')); ?></p>
                            <p><span class="font-bold"><?php echo e(__('Fecha de Conclusión: ')); ?></span> <?php echo e($supervision->work->completion_date->format('d-m-Y')); ?></p>
                        </div>
                    </div>
                    <div class="mt-4 text-center sm:m-0 sm:text-right w-auto">
                        <h2 class="text-sm+ font-semibold uppercase text-primary dark:text-accent-light">
                            <?php echo e($supervision->work->city->name .' / '. $supervision->work->city->state->name); ?>

                        </h2>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left">
                        <p class="text-lg font-medium text-slate-600 dark:text-navy-100"><?php echo e(__('Descripción del Trabajo')); ?></p>
                        <div class="space-y-1 pt-2">
                            <p><?php echo e($supervision->work->description); ?></p>
                        </div>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-8 mt-1">
                    <div>
                        <p class="font-bold text-lg">Lista de Servicios:</p>
                        <div class="flex flex-wrap gap-3">
                            <?php $__empty_1 = true; $__currentLoopData = $supervision->work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="space-x-2.5 text-slate-600 dark:text-navy-100">
                                    <a class="tag rounded-full bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-100 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                        <?php echo e($service->name); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">Esta obra no tiene servicios registrados...</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
            </div>
        </div>
    </main>

    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/supervisory/assignments/show.blade.php ENDPATH**/ ?>