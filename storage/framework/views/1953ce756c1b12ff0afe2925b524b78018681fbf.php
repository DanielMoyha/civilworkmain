<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => ['class' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '']); ?>
    <?php $__env->startSection('sidebar-panel'); ?>
        <?php echo $__env->make('layouts.sidebar-panel.sp-works', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6 noPrint">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Trabajos - Obras')); ?></h2>
                <span>
                    <button @click="window.print();" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"
                            />
                        </svg>
                    </button>
                </span>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => route('admin.works.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.works.index'))]); ?><?php echo e(__('Obras')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <li>
                        <span><?php echo e(__('Ver detalles de obra')); ?></span>
                    </li>
                    
                </ul>
            </div>

            <div class="grid grid-cols-1">
                <div class="card px-5 py-12 sm:px-18">
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="text-center sm:text-left sm:w-10/12">
                            <h2 class="text-xl font-semibold uppercase text-primary dark:text-accent-light">
                                <?php echo e($work->name); ?>

                            </h2>
                            <div class="space-y-1 pt-2">
                                <p><span class="font-bold"><?php echo e(__('Contratante: ')); ?></span> <?php echo e($work->name_contractor); ?></p>
                                <p><span class="font-bold"><?php echo e(__('Dirección: ')); ?></span> <?php echo e($work->address_contractor); ?></p>
                                <p><span class="font-bold"><?php echo e(__('Duración del Trabajo: ')); ?></span> <?php echo e($work->work_duration . __(' Meses')); ?></p>
                                <p><span class="font-bold"><?php echo e(__('Fecha de Inicio: ')); ?></span> <?php echo e($work->start_date->format('d-m-Y')); ?></p>
                                <p>
                                    <span class="font-bold"><?php echo e(__('Fecha de Conclusión: ')); ?></span>
                                    <?php if($work->completion_date): ?>
                                        <?php echo e($work->completion_date->format('d-m-Y')); ?>

                                    <?php else: ?>
                                        <span class="badge rounded-full border border-success text-success"><?php echo e(__('En ejecución')); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="mt-4 text-center sm:m-0 sm:text-right w-auto">
                            <h2 class="text-sm+ font-semibold uppercase text-primary dark:text-accent-light">
                                <?php echo e($work->city->name .' / '. $work->city->state->name); ?>

                            </h2>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="text-center sm:text-left">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100"><?php echo e(__('Descripción del Trabajo')); ?></p>
                            <div class="space-y-1 pt-2">
                                <p><?php echo e($work->description); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500  noPrint"></div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-1">
                        <div>
                            <p class="font-bold text-lg">Lista de Servicios:</p>
                            <?php $__empty_1 = true; $__currentLoopData = $work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                    <i class="fas fa-check fa-sm"></i>
                                    <span><?php echo e($service->name); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">
                                    <?php echo e(__('Esta obra no tiene servicios registrados...')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Consultores Asociados:</p>
                            <?php $__empty_1 = true; $__currentLoopData = $work->associate_consultants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associate_consultant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                    <i class="fas fa-check fa-sm"></i>
                                    <span><?php echo e($associate_consultant->name); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">Este trabajo no cuenta con consultores asociados...</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500 noPrint"></div>

                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="mt-4 text-center sm:m-0 sm:text-left">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100"><?php echo e(__('Valor aproximado de los servicios')); ?></p>
                            <div class="space-y-1 pt-2">
                                <p class="text-lg text-primary dark:text-accent-light">
                                    <?php echo e(__('Total: ')); ?> <span class="font-medium text-sm+"><?php echo e(__('Bs. ') . $work->value_approximate_services); ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="items-end noPrint">
                            <a href="<?php echo e(route('admin.works.index')); ?>" class="btn rounded-full bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                            <?php echo e(__('Volver')); ?>

                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/resources/views/admin/works/show.blade.php ENDPATH**/ ?>