<?php foreach ((['left', 'right']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'confirmation',
    'href',
    'type' => 'button',
    'buttonClasses',
    'classes' => $buttonClasses,
    /* 'classes' => $buttonClasses . ' w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md md:py-4 md:text-lg md:px-10', */
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'confirmation',
    'href',
    'type' => 'button',
    'buttonClasses',
    'classes' => $buttonClasses,
    /* 'classes' => $buttonClasses . ' w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md md:py-4 md:text-lg md:px-10', */
]); ?>
<?php foreach (array_filter(([
    'confirmation',
    'href',
    'type' => 'button',
    'buttonClasses',
    'classes' => $buttonClasses,
    /* 'classes' => $buttonClasses . ' w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md md:py-4 md:text-lg md:px-10', */
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'flex'])); ?>>
    <?php if(isset($href)): ?>
        <a
            href="<?php echo e($href); ?>"
            class="<?php echo e($classes); ?>"
            <?php if(isset($confirmation)): ?>
                x-data
                @click.prevent="if (confirm('<?php echo e($confirmation); ?>')) window.location='<?php echo e($href); ?>';"
            <?php endif; ?>
        >
            <?php echo e($left); ?>

            <?php echo e($slot); ?>

            <?php echo e($right); ?>

        </a>
    <?php else: ?>
        <button
            type="<?php echo e($type); ?>"
            class="<?php echo e($classes); ?>"
        >
            <?php echo e($left); ?>

            <?php echo e($slot); ?>

            <?php echo e($right); ?>

        </button>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/resources/views/components/button/index.blade.php ENDPATH**/ ?>