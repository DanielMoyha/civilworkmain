<?php $__env->startPush('styles'); ?>
    <style>
        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 7px 15px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #4F46E5;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('layouts.sidebar-panel.sp-study', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('content'); ?>

        <?php if(session('status') === 'upload-document'): ?>
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
            <div x-init="$notification({ text: 'Documentos subidos correctamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
            </p>
        <?php endif; ?>
        <?php if(session('status') === 'upload-document-error'): ?>
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
            <div x-init="$notification({ text: 'Vuelva a intentarlo, ocurrió un Error!', variant: 'error', position: 'right-top', duration: 2200 })"></div>
            </p>
        <?php endif; ?>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Cargar Documentos')); ?></h2>
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
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('study.assignments'))]); ?><?php echo e(__('Documentos')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <li><?php echo e(__('Documentos de los estudios de obra')); ?></li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-1">

                <div class="card p-5">
                    <div class="lg:flex lg:items-center lg:justify-between lg:text-right text-xs">
                        <h2 class="font-bold text-sm+ uppercase sm:text-center"><?php echo e(__('Detalles de la obra')); ?></h2>

                        <div class="lg:shrink-0 md:my-1 md:text-left sm:text-center space-y-1.5">
                            <a href="<?php echo e(route('study.assignments.show', [$study->id])); ?>" class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                <i class="fa-solid fa-circle-plus mr-2"></i> <?php echo e(__('Estudios Adicionales')); ?>

                            </a>
                            <a href="<?php echo e(route('study.assignments')); ?>" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"><?php echo e(__('Volver')); ?></a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Nombre de la Obra')); ?></p>
                        <p><?php echo e($study->work->name); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Dirección donde se desarrollará la obra (municipio / dpto.)')); ?></p>
                        <p><i class="fa-solid fa-map-location-dot"></i> <?php echo e($study->work->city->name .' / '. $study->work->city->state->name); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Fecha de Inicio')); ?></p>
                        <p><i class="fa-solid fa-calendar-check"></i> <?php echo e($study->work->start_date->format('d-m-Y')); ?></p>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Fecha de Conclusión')); ?></p>
                        <?php if($study->work->completion_date): ?>
                            <p><i class="fa-solid fa-calendar-check"></i> <?php echo e($study->work->completion_date->format('d-m-Y')); ?> <span class="font-semibold italic text-success text-xs opacity-75"><?php echo e(__('(concluido)')); ?></span></p>
                        <?php else: ?>
                            <p class="font-semibold italic text-info text-sm+ opacity-75"><?php echo e(__('* En Ejecución...')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Descripción de la obra')); ?></p>
                        <p><?php echo e($study->work->description); ?></p>
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50 mb-1"><?php echo e(__('Servicios a desarrollar')); ?></p>
                        <?php $__empty_1 = true; $__currentLoopData = $study->work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><i class="fa-solid fa-check"></i> <?php echo e($service->name); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="flex justify-center items-center gap-3">
                                <p class="mt-2 italic font-bold text-sm+">
                                    <i class="fa-solid fa-inbox"></i> <?php echo e(__('Sin servicios designados aún...')); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div>
                        <p class="text-sm font-medium italic opacity-50"><?php echo e(__('Estudios Extra')); ?></p>
                        <?php $__empty_1 = true; $__currentLoopData = $study->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><i class="fa-solid fa-check"></i> <?php echo e($type->name); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="flex justify-center items-center gap-3">
                            <p class="mt-2 italic font-bold text-sm+">
                                <i class="fa-solid fa-inbox"></i> <?php echo e(__('Este estudio no tiene otros estudios extras...')); ?>

                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <div class="card p-5">
                        <?php if($study->work->completion_date): ?>
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
                        <?php else: ?>
                            <form
                                method="POST"
                                action="<?php echo e(route('study.studies.upload.documents.store', [$study->id])); ?>" enctype="multipart/form-data"
                                x-data="{ submitting: false }"
                                x-on:submit="submitting = true; $nextTick(() => $refs.submitBtn.innerText = 'Guardando...')"
                            >
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($study->id); ?>" name="study_id">
                                
                                <label class="block">
                                    <p class="font-medium text-slate-600 dark:text-navy-100"><?php echo e(__('Seleccione los documentos correspondientes ')); ?> <p class="text-sm italic opacity-50"><?php echo e(__('(csv, xls, pdf, docx) Max: 2MB')); ?></p></p>
                                    <input type="file" name="files[]" multiple accept=".doc,.docx,.pdf,.csv,.xls,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="mt-2">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('files'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('files')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
                    <div class="card p-5 mt-10">
                        <h2 class="font-bold text-sm+ uppercase"><?php echo e(__('Documentos subidos para esta obra')); ?></h2>
                        <div class="gap-8 grid grid-cols-1 md:grid-cols-3 mt-4 sm:grid-cols-2">
                            <?php $__empty_1 = true; $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <a href="<?php echo e(asset('uploads') . '/' . $document->file); ?>" target="_blank">
                                    <img src="<?php echo e(asset('assets/images/icons/documentFile.png')); ?>" alt="" width="40" height="40">
                                    <span class="line-clamp-1"><?php echo e($document->name); ?></span>
                                </a>
                                
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="lg:col-span-10 lg:text-center md:col-span-9 md:text-center sm:col-span-8">
                                    <p class="mt-3 italic font-bold text-sm+ underline">
                                        <i class="fa-solid fa-inbox pr-1"></i> <?php echo e(__('Este estudio aún no tiene documentos subidos')); ?>

                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                
            </div>
        </main>

    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/resources/views/studies/documents/create.blade.php ENDPATH**/ ?>