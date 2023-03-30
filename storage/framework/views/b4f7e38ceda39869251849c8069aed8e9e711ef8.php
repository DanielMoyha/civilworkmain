<?php
    $classes = "text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent";
?>

<div>
    <li class="flex items-center space-x-2">
        <a <?php echo e($attributes->merge(['class' => $classes])); ?>>
            <?php echo e($slot); ?>

        </a>
        <svg
            x-ignore=""
            xmlns="http://www.w3.org/2000/svg"
            class="h-3.5 w-3.5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </li>
</div><?php /**PATH /var/www/html/resources/views/components/link.blade.php ENDPATH**/ ?>