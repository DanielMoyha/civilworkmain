<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Estudios y Servicios de Gestión')); ?></title>
    
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/logos/logo-eyserges.svg')); ?>" type="image/x-icon">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/main.css', 'resources/js/main.js']); ?>
    
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
        <style>
            div::-webkit-scrollbar {
        width: 1em;
        height:10px;
    }
     
    div::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3);
    }
     
    div::-webkit-scrollbar-thumb {
      background-color: #E2E8F0;
      outline: 1px solid #E2E8F0;
      border-radius: 9999px;
    }
        </style>
</head>
<body <?php echo e($attributes->merge(['class' => 'is-header-blur'])); ?>>
    <?php echo e($slot); ?>


    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /var/www/html/resources/views/components/body.blade.php ENDPATH**/ ?>