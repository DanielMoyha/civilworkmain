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
        <?php if(session('status') === 'materials-action'): ?>
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
            <div x-init="$notification({ text: 'Datos guardados correctamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
            </p>
        <?php endif; ?>

        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Asignar Materiales')); ?></h2>
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
                    <li><?php echo e(__('Asignaciones de materiales de construcción por obra')); ?></li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-1">
                <div class="card p-5">
                    <h2 class="font-bold text-sm+ uppercase">Detalles de la obra</h2>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Nombre de la Obra')); ?></p>
                        <p><?php echo e($construction->work->name); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Dirección donde se desarrollará la obra (municipio / dpto.)')); ?></p>
                        <p><i class="fa-solid fa-map-location-dot"></i> <?php echo e($construction->work->city->name .' / '. $construction->work->city->state->name); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Fecha de Inicio')); ?></p>
                        <p><i class="fa-solid fa-calendar-check"></i> <?php echo e($construction->work->start_date->format('d-m-Y')); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Fecha de Conclusión')); ?></p>
                        <?php if($construction->work->completion_date): ?>
                            <p><i class="fa-solid fa-calendar-check"></i> <?php echo e($construction->work->completion_date->format('d-m-Y')); ?> <span class="font-semibold italic text-success text-xs opacity-75"><?php echo e(__('(concluido)')); ?></span></p>
                        <?php else: ?>
                            <p class="font-semibold italic text-info text-sm+ opacity-75"><?php echo e(__('* En Ejecución...')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Descripción de la obra')); ?></p>
                        <p><?php echo e($construction->work->description); ?></p>
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50 mb-1"><?php echo e(__('Servicios a desarrollar')); ?></p>
                        <?php $__empty_1 = true; $__currentLoopData = $construction->work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><i class="fa-solid fa-check"></i> <?php echo e($service->name); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="flex justify-center items-center gap-3">
                            <p class="mt-2 italic font-bold text-sm+"><i class="fa-solid fa-inbox"></i> Sin servicios designados aún...</p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Materiales utilizados')); ?></p>
                        <?php $__empty_1 = true; $__currentLoopData = $construction->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><i class="fa-solid fa-check"></i> <?php echo e($material->name); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="flex justify-center items-center gap-3">
                            <p class="mt-2 italic font-bold text-sm+">
                                <i class="fa-solid fa-inbox"></i> <?php echo e(__('Sin materiales designados aún...')); ?>

                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <div class="card p-5">
                        <?php if($construction->work->completion_date): ?>
                            <div class="flex flex-col gap-2 text-center">
                                <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                                <p class="font-semibold italic text-sm opacity-80">
                                    <?php echo e(__('Esta obra está concluida, por lo que ya no puede asignar nuevos materiales de construcción.')); ?>

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
                        <?php else: ?>
                            <form action="<?php echo e(route('construction.materials.update', $construction->id)); ?>" method="post" x-data="{ submitting: false }" x-on:submit="submitting = true; $nextTick(() => $refs.submitBtn.innerText = 'Guardando...')">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>
                                <label class="block">
                                    <span class="text-sm+ font-bold">Seleccione los materiales para esta obra</span>
                                    <select
                                    x-init="$el._tom = new Tom($el,{plugins: ['caret_position','input_autogrow','remove_button']})"
                                    class="mt-1.5 w-full"
                                    multiple
                                    placeholder="Seleccione los materiales..."
                                    autocomplete="off"
                                    name="materials[]"
                                    >
                                        <option value="" disabled>Seleccione los materiales...</option>
                                        <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($material->id); ?>"
                                                <?php echo e(in_array($material->id, $constructionHasMaterial) ? 'selected' : ''); ?>

                                            ><?php echo e($material->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </label>
                                <button
                                    type="submit"
                                    x-bind:class="{ 'opacity-50': submitting }"
                                    x-bind:disabled="submitting"
                                    x-ref="submitBtn"
                                    class="btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90 mt-4"
                                ><i class="fa-solid fa-circle-check pr-1"></i><?php echo e(__('Guardar')); ?></button>
                            </form>
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
<?php endif; ?>


<?php /**PATH /var/www/html/resources/views/builders/allowances/assignment-materials.blade.php ENDPATH**/ ?>