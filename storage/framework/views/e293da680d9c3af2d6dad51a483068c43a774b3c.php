<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('layouts.sidebar-panel.sp-construction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('content'); ?>


    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Asignaciones')); ?></h2>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => route('construction.assignments')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('construction.assignments'))]); ?><?php echo e(__('Asiganciones de obra')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <li><?php echo e(__('Lista de asignaciones de obras de construcción')); ?></li>
            </ul>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 sm:gap-5 lg:grid-cols-2 lg:gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($work->status === 1): ?>
                    <div class="max-w-xl">
                        <div class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                            <div x-data="{expandedItem:null}" class="flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                                <div x-data="accordionItem('item-1')" class="overflow-hidden rounded-lg border border-slate-150 dark:border-navy-500">
                                    <div class="flex items-center justify-between bg-slate-150 px-4 py-4 dark:bg-navy-500 sm:px-5">
                                        <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                            <div class="avatar h-10 w-10" x-tooltip.on.mouseenter="'<?php echo e($work->city->state->name.' -> '.$work->city->name); ?>'">
                                                <div class="is-initial rounded-full bg-success dark:bg-accent-focus uppercase text-white">
                                                    <?php echo e($work->city->state->code); ?>

                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-xs text-slate-300 italic dark:text-navy-500">
                                                    <?php echo e('hace ' . $work->updated_at->diffForHumans(null, true)); ?>

                                                    </p>
                                                <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                                    <?php echo e($work->name); ?>

                                                </p>
                                                <p class="text-xs text-slate-500 line-clamp-1 dark:text-navy-300">
                                                    <?php echo e($work->description); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <?php if($work->completion_date): ?>
                                            <a  href="<?php echo e(route('construction.materials', [$work->construction->id])); ?>"
                                                class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25" x-tooltip.success.on.mouseenter="'<?php echo e(__('Obra concluida')); ?>'" >
                                                <i class="fa-solid fa-eye text-success text-sm+"></i>
                                            </a>
                                        <?php else: ?>
                                            <button
                                                @click="expanded = !expanded"
                                                class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                                            >
                                                <i
                                                    :class="expanded && '-rotate-180'"
                                                    class="fas fa-chevron-down text-sm transition-transform"
                                                ></i>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <div x-collapse x-show="expanded">
                                        <div class="px-4 py-4 sm:px-5">
                                            <div class="flex justify-between">
                                                <p class="text-slate-900 dark:text-navy-200 font-bold pb-2"><?php echo e($work->services->count() . ' SERVICIOS:'); ?></p>

                                                <div class="flex justify-end gap-2 text-xs mb-1">
                                                    <a href="<?php echo e(route('construction.materials', [$work->construction->id])); ?>" class="btn bg-accent dark:bg-success font-medium text-white hover:dark:bg-success-focus focus:dark:bg-success-focus active:dark:bg-success-focus/90 hover:bg-accent-focus focus:bg-accent-focus active:bg-accent-focus/90 px-2.5">
                                                        <i class="fa-solid fa-clipboard-list pr-2"></i> <?php echo e(__('Asignar Materiales')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                            <p>
                                                <?php $__currentLoopData = $work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="space-x-2.5 line-clamp-1 text-slate-600 dark:text-navy-100">
                                                        <i class="fas fa-check fa-sm"></i>
                                                        <span><?php echo e($service->name); ?></span>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="max-w-xl">
                        <div class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                            <div class="border border-slate-150 cursor-not-allowed dark:border-navy-500 rounded-lg">
                                <div class="card">
                                    <div class="bg-slate-150 dark:bg-navy-500 flex items-center justify-between px-4 py-4 sm:px-5 opacity-50">
                                        <div class="flex items-center space-x-3.5 tracking-wide outline-none transition-all">
                                            <div class="avatar h-10 w-10" x-tooltip.on.mouseenter="'<?php echo e($work->city->state->name.' -> '.$work->city->name); ?>'">
                                                <div class="is-initial rounded-full bg-success dark:bg-accent-focus uppercase text-white">
                                                    <?php echo e($work->city->state->code); ?>

                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-xs text-slate-300 italic dark:text-navy-500">
                                                    <?php echo e($work->updated_at->diffForHumans()); ?>

                                                    </p>
                                                <p class="text-slate-700 line-clamp-1 dark:text-navy-100">
                                                    <?php echo e($work->name); ?>

                                                </p>
                                                <p class="text-xs text-slate-500 line-clamp-1 dark:text-navy-300">
                                                    <?php echo e($work->description); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute flex inset-0 items-end justify-center w-auto">
                                        <div class="bg-gradient-to-t from-pink-500 p-5 rounded-lg text-center to-transparent via-[#19213266] w-full">
                                            <div>
                                                <span class="dark:text-white font-bold line-clamp-2 text-lg text-slate-700">
                                                    <?php echo e(__('OBRA DADA DE BAJA')); ?>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-12 flex justify-center mt-3">
                    <h2 class="lg:text-3xl md:text-2xl"><?php echo e(__('Aún no tiene designaciones de obras')); ?></h2>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/resources/views/builders/allowances/index.blade.php ENDPATH**/ ?>