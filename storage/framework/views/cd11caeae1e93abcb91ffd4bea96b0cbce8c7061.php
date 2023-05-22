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
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('study.assignments'))]); ?><?php echo e(__('Asignaciones de obra')); ?> <?php echo $__env->renderComponent(); ?>
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
                

                <div class="lg:flex lg:items-center lg:justify-end lg:text-right lg:gap-3">
                    <div class="lg:flex lg:gap-3 lg:items-baseline lg:shrink-0 md:my-1 md:text-left sm:text-center space-y-1.5">
                        <?php if($supervision->work->completion_date): ?>
                            <div class="flex flex-col gap-2 text-center">
                                <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                                <p class="font-semibold italic text-sm opacity-80">
                                    <?php echo e(__('Esta obra está concluida, por lo que ya no puede registrar nuevos estudios extras para dicha obra.')); ?>

                                </p>
                                <div class="text-xs opacity-50">
                                    <p class="underline">
                                        <?php echo e(__('(Si cree que existe alguna inconsistencia, por favor, comuníquese con el Director General.)')); ?>

                                    </p>
                                    <span class="text-sm">
                                        <i class="fa-regular fa-hand-point-right px-0.5"></i>
                                        <a href="https://api.whatsapp.com/send?phone=59176513094&text=hola,%20qué%20tal?" target="__blank"><i class="fa-brands fa-whatsapp text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                            <a href="<?php echo e(route('supervision.assignments')); ?>" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                <i class="fa-solid fa-caret-left mr-1"></i> <?php echo e(__('Volver')); ?>

                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('supervision.assignments.tasks', [$supervision->id])); ?>" class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 mr-2">
                                <i class="fa-solid fa-list-check mr-1"></i><?php echo e(__('Registrar Tareas')); ?>

                            </a>
                            <a href="<?php echo e(route('supervision.assignments.follow-ups', [$supervision->id])); ?>" class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 mr-2">
                                <i class="fa-solid fa-images mr-1"></i><?php echo e(__('Realizar Seguimiento')); ?>

                            </a>
                            <a href="<?php echo e(route('supervision.assignments')); ?>" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                <i class="fa-solid fa-caret-left mr-1"></i> <?php echo e(__('Volver')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left lg:w-10/12">
                        <h2 class="text-xl font-semibold uppercase text-primary dark:text-accent-light">
                            <?php echo e($supervision->work->name); ?>

                        </h2>
                        <div class="space-y-1 pt-2">
                            <p>
                                <span class="font-bold"><?php echo e(__('Duración del Trabajo: ')); ?></span>
                                <?php echo e($supervision->work->work_duration . __(' Meses')); ?>

                            </p>
                            <p>
                                <span class="font-bold"><?php echo e(__('Fecha de Inicio: ')); ?></span>
                                <?php echo e($supervision->work->start_date->format('d-m-Y')); ?>

                            </p>
                            <p>
                                <span class="font-bold"><?php echo e(__('Fecha de Conclusión: ')); ?></span>
                                <?php if($supervision->work->completion_date): ?>
                                    <span><i class="fa-solid fa-calendar-check"></i> <?php echo e($supervision->work->completion_date->format('d-m-Y')); ?> <span class="font-semibold italic text-success text-xs opacity-75"><?php echo e(__('(concluido)')); ?></span></span>
                                <?php else: ?>
                                    <span class="font-semibold italic text-info text-sm+ opacity-75"><?php echo e(__('* En Ejecución...')); ?></span>
                                <?php endif; ?>
                            </p>
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
                        <p class="font-bold text-lg mb-1"><?php echo e(__('Lista de Servicios:')); ?></p>
                        <div class="flex flex-wrap gap-3">
                            <?php $__empty_1 = true; $__currentLoopData = $supervision->work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="space-x-2.5 text-slate-600 dark:text-navy-100">
                                    <a class="tag rounded-full bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-100 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                        <?php echo e($service->name); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="font-bold text-sm+ italic opacity-40 flex justify-center items-center">
                                    <?php echo e(__('Esta obra no tiene servicios registrados...')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                
                <p class="font-bold text-lg mb-1"><?php echo e(__('Listado de tareas:')); ?></p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <?php $__empty_1 = true; $__currentLoopData = $supervision->controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <div>
                          <span class="text-sm+">
                              <?php if($task->completed_at): ?>
                                  <i class="fa-solid fa-check text-success"
                                    x-tooltip.success.on.mouseenter="'<?php echo e(__('Completada')); ?>'"></i>
                              <?php else: ?>
                                  <i class="fa-solid fa-clock text-warning"
                                    x-tooltip.warning.on.mouseenter="'<?php echo e(__('Pendiente')); ?>'"></i>
                              <?php endif; ?>
                          </span>
                        <span class="text-sm"><?php echo e($task->description); ?></span>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="font-light text-center text-sm col-span-12">
                            <?php echo e(__('No registró ninguna tarea hasta la fecha')); ?>

                        </p>
                    <?php endif; ?>
                  </div>
                  


                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

                <p class="font-bold text-lg mb-1"><?php echo e(__('Imágenes de Seguimiento:')); ?></p>
                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4">
                    <?php $__empty_1 = true; $__currentLoopData = $supervision->follow_ups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follow_up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="image-container">
                            <img
                                class="h-auto w-full rounded-lg object-cover object-center transition-opacity hover:opacity-40"
                                src="<?php echo e(Storage::url('followUp/'.$follow_up->image)); ?>"
                                alt="image"
                            />
                            <div class="image-overlay absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center opacity-0 transition-opacity">
                                <div class="dark:text-white text-center text-slate-900 font-semibold">
                                    <span class="text-xs line-clamp-1">
                                        <?php echo e($follow_up->description); ?>

                                    </span>
                                    <span class="text-sm mt-2">
                                        <?php echo e(\Carbon\Carbon::parse($follow_up->date)->format('d/m/Y')); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="font-light text-center text-sm col-span-12">
                            <?php echo e(__('No subió ninguna imagen de seguimiento hasta la fecha')); ?>

                        </p>
                    <?php endif; ?>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/supervisory/assignments/show.blade.php ENDPATH**/ ?>