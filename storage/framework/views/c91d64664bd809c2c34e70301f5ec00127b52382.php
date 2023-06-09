<?php
    $classes = "flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4";
?>

<div>
    <li>
        <a
            x-data="navLink"
            :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
            <?php echo e($attributes->merge(['class' => $classes])); ?>

        >
            <div class="flex items-center space-x-2">
                <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                <span><?php echo e($slot); ?></span>
            </div>
        </a>
    </li>
</div><?php /**PATH /var/www/html/resources/views/components/link-sidebar.blade.php ENDPATH**/ ?>