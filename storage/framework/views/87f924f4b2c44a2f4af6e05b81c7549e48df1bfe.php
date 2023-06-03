<div>
    <div class="flex items-center justify-between mt-10">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            <?php echo e(__('Lista de estudios en ejecución')); ?>

        </h2>
        <div class="flex">
            <div class="flex items-center" x-data="{isInputActive:false}">
                <label class="block">
                    <input
                        x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                        :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                        class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                        placeholder="Buscar aquí..."
                        type="search"
                        wire:model='search'
                    />
                </label>
                <button
                    @click="isInputActive = !isInputActive"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="card mt-1 shadow-xl">
        <div class="is-scrollbar-show min-w-full overflow-x-auto  rounded-lg">
            <table class="is-hoverable w-full text-left">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('N°')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            <?php echo e(__('Estudio')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            <?php echo e(__('Encargado')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Estudios extra')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Documentos')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $allStudies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="<?php if($studie->work->status === 0): ?> bg-error/15 hover:!border-error hover:text-error <?php endif; ?> border border-transparent border-b-slate-200 dark:border-b-navy-500" wire:loading.class='opacity-40'>
                            <td class="text-center px-4 py-3 sm:px-5"><?php echo e($loop->iteration); ?></td>

                            <?php if($studie->work->status === 0): ?>
                                <td class="italic px-4 py-3 sm:px-5 tracking-wide">
                                    <span class="cursor-not-allowed">
                                        <?php echo e($studie->name); ?>

                                    </span>
                                </td>
                            <?php else: ?>
                                <?php if($studie->work->completion_date): ?>
                                    <td class=" px-4 py-3 sm:px-5">
                                        <span class="badge rounded-full border border-success bg-success text-white" x-tooltip.success.on.mouseenter="'Obra concluida'">
                                            <i class="fa-solid fa-circle-check text-sm+"></i>
                                        </span>
                                        <a href="<?php echo e(route('admin.works.show', [$studie->work->id])); ?>">
                                            <?php echo e($studie->name); ?>

                                        </a>
                                    </td>
                                <?php else: ?>
                                    <?php if($studie->work->user->is_active !== 1): ?>
                                        <td class="px-4 py-3 sm:px-5">
                                            <span class="badge rounded-full border border-info bg-info text-white" x-tooltip.info.on.mouseenter="'Obra en Pausa'">
                                                <i class="fa-solid fa-circle-pause text-sm+"></i>
                                            </span>
                                            <a href="<?php echo e(route('admin.works.show', [$studie->work->id])); ?>">
                                                <?php echo e($studie->name); ?>

                                            </a>
                                        </td>
                                    <?php else: ?>
                                        <td class="px-4 py-3 sm:px-5">
                                            <span class="badge rounded-full border border-warning bg-warning text-white cursor-help" x-tooltip.warning.on.mouseenter="'En ejecución'">
                                                <i class="fa-solid fa-file-contract text-sm+"></i>
                                            </span>
                                            <a href="<?php echo e(route('admin.works.show', [$studie->work->id])); ?>">
                                                <?php echo e($studie->name); ?>

                                            </a>
                                        </td>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if($studie->work->user->is_active === 0): ?>
                                <td class=" px-4 py-3 sm:px-5">
                                    <span class="badge rounded-full border border-error bg-error text-white cursor-help" x-tooltip.error.on.mouseenter="'Usuario deshabilitado'">
                                        <i class="fa-solid fa-user-large-slash text-xs"></i>
                                    </span>
                                    <?php echo e($studie->work->user->name); ?>

                                </td>
                            <?php else: ?>
                                <td class=" px-4 py-3 sm:px-5"><?php echo e($studie->work->user->name); ?></td>
                            <?php endif; ?>

                            <?php if($studie->work->status === 0): ?>
                                <td class="dark:text-white decoration-double hover:text-error px-4 py-3 sm:px-5 text-base text-center tracking-wider underline uppercase" colspan="2">
                                    <i class="fa-solid fa-circle-info text-info" x-tooltip.info.on.mouseenter="'Se dio de baja en fecha: <?php echo e($studie->work->updated_at->format('d-m-Y')); ?>'"></i> <?php echo e(__('OBRA DADA DE BAJA')); ?>

                                </td>
                            <?php else: ?>
                                <?php if($studie->types()->exists()): ?>
                                    <td class=" px-4 py-3 sm:px-5">
                                        <div class="flex flex-wrap gap-2 py-1">
                                            <?php $__empty_2 = true; $__currentLoopData = $studie->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                <a class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25 text-tiny">
                                                    <?php echo e($type->name); ?>

                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                <p class="font-bold text-xs italic opacity-40">
                                                    <?php echo e(__('Aún no tiene materiales registrados...')); ?>

                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                <?php else: ?>
                                    <td class="text-center font-bold text-xs italic opacity-40 px-4 py-3 sm:px-5">
                                        <?php echo e(__('Sin estudios extras')); ?>

                                    </td>
                                <?php endif; ?>
                                <?php if($studie->documents()->exists()): ?>
                                    <td class="text-center px-4 py-3 sm:px-5">
                                        <div>
                                            <?php echo e($studie->documents->count()); ?>

                                            <span class="text-xs"><?php echo app('translator')->choice('Documento|Documentos', $studie->documents->count()); ?></span>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-3">
                                            <?php $__empty_2 = true; $__currentLoopData = $studie->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                <a class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25" href="<?php echo e(asset('uploads') . '/' . $document->file); ?>" target="_blank">
                                                    <span class="line-clamp-1"><?php echo e($document->name); ?></span>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                <td class="text-center font-bold text-xs italic opacity-40 px-4 py-3 sm:px-5"> <?php echo e(__('Sin documentos')); ?></td>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                <?php else: ?>
                                    <td class="text-center font-bold text-xs italic opacity-40 px-4 py-3 sm:px-5"> <?php echo e(__('Sin documentos')); ?></td>
                                <?php endif; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="h-8 w-8 text-cool-gray-400 text-3xl"><i class="fa-solid fa-inbox"></i></span>
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl"><?php echo e(__('Estudios no encontrados...')); ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo $allStudies->links(); ?>

    </div>
</div>

<?php /**PATH /var/www/html/resources/views/livewire/general-studies.blade.php ENDPATH**/ ?>