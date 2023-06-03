<table>
    <thead>
        <tr class="font-bold">
            <th>N°</th>
            <th>Nombre de la obra</th>
            <th>Estado de obra</th>
            <th>Tipo de Obra</th>
            <th>Encargado</th>
            <th>Dpto. / Ciudad</th>
            <th>Contratante</th>
            <th>Dir. Contratante</th>
            <th>Duración de la obra (Meses)</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Conclusión</th>
            <th>Descripción</th>
            <th>Cantidad de servicios</th>
            <th>Valor aprox. de servicios (Bs.)</th>
            <th>Servicios</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($work->name); ?></td>
                <td>
                    <?php if($work->status === 1): ?>
                        Activo
                    <?php else: ?>
                        Inhabilitado
                    <?php endif; ?>
                </td>
                <td><?php echo e($work->type_work->name); ?></td>
                <td><?php echo e($work->user->name); ?></td>
                <td><?php echo e($work->city->state->name .' / '. $work->city->name ?? ''); ?></td>
                <td><?php echo e($work->name_contractor); ?></td>
                <td><?php echo e($work->address_contractor); ?></td>
                <td><?php echo e($work->work_duration); ?> <?php echo e(__('Meses')); ?></td>
                <td><?php echo e($work->start_date->format('d-m-Y')); ?></td>
                <td>
                    <?php if($work->completion_date): ?>
                        <?php echo e($work->completion_date->format('d-m-Y')); ?>

                    <?php else: ?>
                        <?php if($work->user->is_active !== 1): ?>
                            Obra Pausada
                        <?php else: ?>
                            En ejecución
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
                <td><?php echo e($work->description); ?></td>
                <td><?php echo e($work->services->count()); ?> <?php echo e(__('Servicios')); ?></td>
                <td><?php echo e($work->value_approximate_services); ?></td>
                <td>
                    <?php $__empty_2 = true; $__currentLoopData = $work->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                        <?php echo e($service->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                        <?php echo e(__('Sin Servicios')); ?>

                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><?php echo e(__('Sin datos...')); ?></tr>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH /var/www/html/resources/views/admin/works/works-export.blade.php ENDPATH**/ ?>