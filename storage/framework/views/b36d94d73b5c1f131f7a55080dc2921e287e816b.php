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
        <?php if(session('status') === 'followUp-created'): ?>
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
            <div x-init="$notification({ text: 'Datos guardados exitosamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
            </p>
        <?php endif; ?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Supervisión de Obra')); ?></h2>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => route('supervision.assignments')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('supervision.assignments'))]); ?><?php echo e(__('Seguimientos de obra')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <li><?php echo e(__('Listado de los seguimientos de obras')); ?></li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                <?php $__empty_1 = true; $__currentLoopData = $followUps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $followUp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($followUp->supervision->work->status === 1): ?>
                        <div class="card">
                            <img
                                class="h-72 w-full rounded-lg object-cover object-center"
                                src="<?php echo e(Storage::url('followUp/'.$followUp->image)); ?>"
                                alt="image"
                            />
                            <div class="absolute inset-0 flex h-full w-full flex-col justify-end">
                                <div
                                    class="space-y-1.5 rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 pb-3 pt-12"
                                >
                                    <div class="line-clamp-2">
                                        <a href="#" class="text-base font-medium text-white">
                                            <?php echo e($followUp->description); ?>

                                        </a>
                                    </div>
                                    <div class="line-clamp-2">
                                        <a href="<?php echo e(route('supervision.assignments.show', [$followUp->supervision])); ?>" class="text-xs lowercase font-medium italic opacity-75 text-white">
                                            <?php echo e($followUp->supervision->name); ?>

                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center text-xs text-slate-200">
                                            <p class="flex items-center space-x-1">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3.5 w-3.5"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                                <span class="line-clamp-1"><?php echo e($followUp->created_at->format('d-m-Y')); ?></span>
                                            </p>
                                            <div class="mx-3 my-0.5 w-px self-stretch bg-white/20"></div>
                                            <p class="shrink-0 text-tiny+"><?php echo e($followUp->created_at->diffForHumans()); ?></p>
                                        </div>
                                        <div class="-mr-1.5 flex">
                                            <form action="<?php echo e(route('supervision.destroy', [$followUp->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button
                                                x-tooltip.error="'Borrar'"
                                                onclick="return confirm('¿Está Seguro?')"
                                                class="btn h-7 w-7 rounded-full p-0 text-error hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25"
                                            >
                                            <i class="fa-solid fa-trash-arrow-up"></i>
                                            </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                    <div class="card cursor-not-allowed">
                        <img
                            class="h-72 object-center object-cover opacity-40 rounded-lg w-full"
                            src="<?php echo e(Storage::url('followUp/'.$followUp->image)); ?>"
                            alt="image"
                        />
                        <div class="absolute flex flex-col h-full inset-0 justify-end w-full">
                            <div class="bg-gradient-to-t from-pink-500 pb-3 pt-14 px-4 rounded-lg space-y-1.5 to-transparent via-purple-300">
                                <div class="line-clamp-2 pb-8 text-center">
                                    <span class="decoration-double font-bold text-slate-500 text-xl underline uppercase"><?php echo e(__('Obra dada de Baja')); ?></span>
                                </div>
                                <div class="line-clamp-2">
                                    <span class="text-base font-medium text-white">
                                        <?php echo e($followUp->description); ?>

                                    </span>
                                </div>
                                <div class="line-clamp-2">
                                    <span class="text-xs lowercase font-medium italic opacity-75 text-white">
                                        <?php echo e($followUp->supervision->name); ?>

                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-xs text-slate-200">
                                        <p class="flex items-center space-x-1">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-3.5 w-3.5"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                />
                                            </svg>
                                            <span class="line-clamp-1"><?php echo e($followUp->created_at->format('d-m-Y')); ?></span>
                                        </p>
                                        <div class="mx-3 my-0.5 w-px self-stretch bg-white/20"></div>
                                        <p class="shrink-0 text-tiny+"><?php echo e($followUp->created_at->diffForHumans()); ?></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="flex justify-center items-center">
                    <h2 class="text-sm+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 mt-2">
                        <i class="fa-solid fa-inbox"></i> <?php echo e(__('Aún no tiene realizado seguimientos...')); ?>

                    </h2>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/supervisory/follow-ups/index.blade.php ENDPATH**/ ?>