<!--LAYOUT MAIN-->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.body','data' => ['xData' => '','xBind' => '$store.global.documentBody','attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '','x-bind' => '$store.global.documentBody','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

    <?php echo $__env->make('layouts.pre-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.search-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Main Content Wrapper -->
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());

        function validateLettersOnly() {
            const regex = /[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g;
            this.value = this.value.replace(regex, "");
        }

        function validateNumbersOnly() {
            const regexNumber = /[^0-9]]/g;
            this.value = this.value.replace(regexNumber, "");
        }

        function validarLetrasYPuntos() {
            const regexLettersDots = /[^A-Za-záéíóúÁÉÍÓÚñÑ.\s'"()\[\]]/g;
            this.value = this.value.replace(regexLettersDots, "");
        }

        const inputsLetters = document.querySelectorAll('.onlyLetters');
            inputsLetters.forEach(input => {
            input.addEventListener('input', validateLettersOnly);
        });

        const inputsNumbers = document.querySelectorAll('.onlyNumbers');
            inputsNumbers.forEach(input => {
            input.addEventListener('input', validateNumbersOnly);
        });

        const inputsLettersDots = document.querySelectorAll('.lettersDots');
            inputsLettersDots.forEach(input => {
            input.addEventListener('input', validarLetrasYPuntos);
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/main.blade.php ENDPATH**/ ?>