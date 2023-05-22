<div>
    <div class="flex items-center justify-between mt-10">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            <?php echo e(__('Lista de obras civiles')); ?>

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
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
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
            <table class="is-hoverable w-full text-left hover:table-fixed">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('N°')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-filter"></i>
                            <?php echo e(__('Acciones')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            <?php echo e(__('Nombre de la obra')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-network-wired"></i>
                            <?php echo e(__('Tipo de Obra')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-user-gear"></i>
                            <?php echo e(__('Encargado')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-earth-americas"></i>
                            <?php echo e(__('Dpto. / Ciudad')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-building"></i>
                            <?php echo e(__('Contratante')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-business-time"></i>
                            <?php echo e(__('Duración de la obra')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-calendar-day"></i>
                            <?php echo e(__('Fecha de Inicio')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center"><i class="fa-solid fa-calendar-check"></i>
                            <?php echo e(__('Fecha de conclusión')); ?>

                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="<?php if($work->status === 0): ?> bg-error/15 <?php endif; ?> border border-transparent border-b-slate-200 dark:border-b-navy-500" wire:loading.class='opacity-40'>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td class="flex justify-center items-center gap-2 py-2">
                                <?php if($work->status === 0): ?>
                                    <button wire:click="$emit('showAlertEnableWork', <?php echo e($work->id); ?>)" class="btn bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 h-8 w-1">
                                        <i class="fa-solid fa-arrow-rotate-right"></i>
                                    </button>
                                <?php endif; ?>
                                <?php if($work->status === 1): ?>
                                    <a href="<?php echo e(route('admin.works.show', [$work->id])); ?>" class="btn bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 h-8 w-1">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.works.edit', [($work->id)])); ?>" class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90 h-8 w-1">
                                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                    </a>
                                    <button wire:click="$emit('showAlert', <?php echo e($work->id); ?>)" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90 h-8 w-1">
                                        <i class="fa-solid fa-ban"></i>
                                    </button>
                                <?php endif; ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo e($work->name); ?></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo e($work->type_work->name); ?></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?php if($work->user->is_active === 1): ?>
                                    <?php echo e($work->user->name); ?>

                                <?php else: ?>
                                    <span>
                                        <i class="fa-solid fa-user-large-slash text-base text-error"></i> <?php echo e($work->user->name); ?>

                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                <?php echo e($work->city->state->name .' / '. $work->city->name ?? ''); ?>

                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><?php echo e($work->name_contractor); ?></td>
                            <td class="text-center"><?php echo e($work->work_duration); ?> <?php echo e(__('meses')); ?></td>
                            <td class="text-center"><?php echo e($work->start_date->format('d-m-Y')); ?></td>
                            <td class="text-center">
                                <?php if($work->completion_date): ?>
                                    <?php echo e($work->completion_date->format('d-m-Y')); ?>

                                <?php else: ?>
                                    <?php if($work->user->is_active !== 1): ?>
                                        <div class="badge rounded-full border border-info bg-info text-white">
                                            <?php echo e(__('Obra Pausada')); ?>

                                        </div>
                                    <?php else: ?>
                                    <div class="badge rounded-full border border-success bg-success text-white">
                                        <?php echo e(__('En ejecución')); ?>

                                    </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="h-8 w-8 text-cool-gray-400 text-3xl"><i class="fa-solid fa-inbox"></i></span>
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl"><?php echo e(__('Obras - Trabajos no encontrados...')); ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div><?php echo $works->links(); ?></div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // alert('g');
        Livewire.on('showAlert', WorkId => {
            Swal.fire({
                title: '¿Desea dar de baja la Obra?',
                text: "Al dar de baja, el encargado de esta obra ya no podrá realizar registros ni actualizaciones a partir de ahora",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, Dar de baja',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar el rol
                    Livewire.emit('deregistering_work', WorkId);

                    Swal.fire(
                        'Obra dada de baja',
                        'Cambios guardados',
                        'success'
                    )
                }
            });
        });
        Livewire.on('showAlertEnableWork', WorkId => {
            Swal.fire({
                title: '¿Desea Rehabilitar la Obra?',
                text: "Los cambios serán revertidos a una obra normal.",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, Rehabilitar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar el rol
                    Livewire.emit('enable_work', WorkId);

                    Swal.fire(
                        'Obra Rehabilitada',
                        'Cambios guardados',
                        'success'
                    )
                }
            });
        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/resources/views/livewire/works.blade.php ENDPATH**/ ?>