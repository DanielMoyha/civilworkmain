<div>
    <div class="flex items-center justify-between mt-10">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            <?php echo e(__('Lista de construcciones en ejecución')); ?>

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
                            <?php echo e(__('Construcción')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Cantidad de materiales')); ?>

                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5 text-center">
                            <?php echo e(__('Materiales')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $allconstructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $construction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500" wire:loading.class='opacity-40'>
                            <td class="text-center px-4 py-3 sm:px-5"><?php echo e($loop->iteration); ?></td>
                            <td class=" px-4 py-3 sm:px-5">
                                <a href="<?php echo e(route('admin.works.show', [$construction->work->id])); ?>"><?php echo e($construction->name); ?></a>
                            </td>
                            <?php if($construction->materials()->exists()): ?>
                                <td class="text-center text-xs+ px-4 py-3 sm:px-5"> <?php echo e($construction->materials->count() . __(' Tipos de matariales utilizados hasta la fecha')); ?></td>
                            <?php else: ?>
                                <td class="text-center font-bold text-xs italic opacity-40 px-4 py-3 sm:px-5"> <?php echo e($construction->materials->count() . __(' materiales')); ?></td>
                            <?php endif; ?>
                            <td class="text-center px-4 py-3 sm:px-5">
                                <div class="flex flex-wrap gap-2 py-1">
                                    <?php $__empty_2 = true; $__currentLoopData = $construction->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <a class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25 text-tiny">
                                            <?php echo e($material->name); ?>

                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <p class="font-bold text-xs italic opacity-40"><?php echo e(__('Aún no tiene materiales registrados...')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class=" px-4 py-3 sm:px-5">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="h-8 w-8 text-cool-gray-400 text-3xl"><i class="fa-solid fa-inbox"></i></span>
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl"><?php echo e(__('Construcciones no encontradas...')); ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo $allconstructions->links(); ?>

    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/general-constructions.blade.php ENDPATH**/ ?>