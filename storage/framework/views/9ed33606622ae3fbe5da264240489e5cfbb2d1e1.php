<div>
    <?php if(session('status') === 'material-created'): ?>
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
        <div x-init="$notification({ text: 'Datos guardados exitosamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
        </p>
    <?php endif; ?>
    <?php if(session('status') === 'cannot-deleted'): ?>
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3500)">
        <div x-init="$notification({ text: 'Una o varias obras tienen este material, no se puede eliminar!', variant: 'warning', position: 'right-top', duration: 3500 })"></div>
        </p>
    <?php endif; ?>
    <?php if(session('status') === 'material-deleted'): ?>
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2200)">
        <div x-init="$notification({ text: 'Material Eliminado exitosamente!', variant: 'success', position: 'right-top', duration: 2200 })"></div>
        </p>
    <?php endif; ?>

    <?php if($updateMode): ?>
        <?php echo $__env->make('builders.materials.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('builders.materials.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>


    <div class="flex items-center justify-between mt-10">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            <?php echo e(__('Lista de servicios')); ?>

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
                            <?php echo e(__('Nombre del material')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Cantidad')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Observaciones')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Acciones')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $allMaterials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500" wire:loading.class='opacity-40'>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($material->name); ?></td>
                            <td class="text-center"> <?php echo e($material->quantity); ?></td>
                            <td class="text-center">
                                <?php if($material->remarks === '' or $material->remarks === null): ?>
                                    <span class="decoration-sky-500/30">---</span>
                                <?php endif; ?>
                                <?php echo e($material->remarks); ?>

                            </td>
                            <td class="flex justify-center items-center gap-2 py-2">
                                <button wire:click="edit(<?php echo e($material->id); ?>)" class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90 h-8 w-1"><i
                                        class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                <button wire:click="$emit('showAlert', <?php echo e($material->id); ?>)" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90 h-8 w-1"><i
                                        class="fa-solid fa-trash fa-lg"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="h-8 w-8 text-cool-gray-400 text-3xl"><i class="fa-solid fa-inbox"></i></span>
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl"><?php echo e(__('Materiales de Construcción no encontrados...')); ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="">
                <?php echo $allMaterials->links(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // alert('g');
        Livewire.on('showAlert', MaterialId => {
            Swal.fire({
                title: '¿Eliminar Material?',
                text: "El material se eliminará de forma permanente.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar el material
                    Livewire.emit('deleteMaterial', MaterialId);

                    /* Swal.fire(
                        'Se eliminó el Servicio',
                        'Eliminado Correctamente',
                        'success'
                    ) */
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/html/resources/views/livewire/materials.blade.php ENDPATH**/ ?>