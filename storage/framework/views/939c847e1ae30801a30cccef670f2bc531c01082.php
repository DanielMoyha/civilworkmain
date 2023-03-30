<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'nameLabel',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'nameLabel',
]); ?>
<?php foreach (array_filter(([
    'nameLabel',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label <?php echo e($attributes->class(['block'])); ?>>
    <span <?php echo e($nameLabel->attributes->class(['font-medium text-slate-600 dark:text-navy-100'])); ?>>
        <?php echo e($nameLabel); ?>

    </span>
    <?php echo e($slot); ?>

</label><?php /**PATH /var/www/html/resources/views/components/form/index.blade.php ENDPATH**/ ?>