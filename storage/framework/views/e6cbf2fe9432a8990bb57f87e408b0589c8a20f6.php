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
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"><?php echo e(__('Control de Supervisión')); ?></h2>
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
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('supervision.assignments'))]); ?><?php echo e(__('Asiganciones de obra')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => route('supervision.assignments.show', [$supervision->id])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('supervision.assignments.show', [$supervision->id]))]); ?><?php echo e(__('Obra designada')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <li><?php echo e(__('Tareas de cumplimiento de obra')); ?></li>
                </ul>
            </div>
            <?php if($supervision->work->completion_date): ?>
                <div class="grid lg:grid-cols-6">
                    <div class="card p-5 col-start-2 col-span-4">
                        <div class="flex flex-col gap-2 text-center items-center">
                            <i class="fa-circle-info fa-solid fa-2x pr-1 text-info"></i>
                            <p class="font-semibold italic text-sm opacity-80">
                                <?php echo e(__('Esta obra está concluida, por lo que ya no puede registrar más tareas.')); ?>

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
                            <a href="<?php echo e(route('supervision.assignments.show', [$supervision->id])); ?>" class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                <i class="fa-solid fa-caret-left mr-1"></i> <?php echo e(__('Volver')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-task', ['supervision_id' => $supervision->id])->html();
} elseif ($_instance->childHasBeenRendered('b3xq4cr')) {
    $componentId = $_instance->getRenderedChildComponentId('b3xq4cr');
    $componentTag = $_instance->getRenderedChildComponentTagName('b3xq4cr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('b3xq4cr');
} else {
    $response = \Livewire\Livewire::mount('create-task', ['supervision_id' => $supervision->id]);
    $html = $response->html();
    $_instance->logRenderedChild('b3xq4cr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-task', ['supervision_id' => $supervision->id])->html();
} elseif ($_instance->childHasBeenRendered('7PN9AxN')) {
    $componentId = $_instance->getRenderedChildComponentId('7PN9AxN');
    $componentTag = $_instance->getRenderedChildComponentTagName('7PN9AxN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7PN9AxN');
} else {
    $response = \Livewire\Livewire::mount('edit-task', ['supervision_id' => $supervision->id]);
    $html = $response->html();
    $_instance->logRenderedChild('7PN9AxN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tasks', ['supervision_id' => $supervision->id])->html();
} elseif ($_instance->childHasBeenRendered('ZPL0C0p')) {
    $componentId = $_instance->getRenderedChildComponentId('ZPL0C0p');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZPL0C0p');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZPL0C0p');
} else {
    $response = \Livewire\Livewire::mount('tasks', ['supervision_id' => $supervision->id]);
    $html = $response->html();
    $_instance->logRenderedChild('ZPL0C0p', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('completed-tasks', ['supervision_id' => $supervision->id])->html();
} elseif ($_instance->childHasBeenRendered('evUewbu')) {
    $componentId = $_instance->getRenderedChildComponentId('evUewbu');
    $componentTag = $_instance->getRenderedChildComponentTagName('evUewbu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('evUewbu');
} else {
    $response = \Livewire\Livewire::mount('completed-tasks', ['supervision_id' => $supervision->id]);
    $html = $response->html();
    $_instance->logRenderedChild('evUewbu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            <?php endif; ?>
        </main>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/supervisory/tasks/create.blade.php ENDPATH**/ ?>