<!-- Dashboards -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('dashboard')).'','xTooltip.placement.right' => '\'Dashboards\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('dashboard')).'','x-tooltip.placement.right' => '\'Dashboards\'']); ?>
    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M5 14.0585C5 13.0494 5 12.5448 5.22166 12.1141C5.44333 11.6833 5.8539 11.3901 6.67505 10.8035L10.8375 7.83034C11.3989 7.42938 11.6795 7.2289 12 7.2289C12.3205 7.2289 12.6011 7.42938 13.1625 7.83034L17.325 10.8035C18.1461 11.3901 18.5567 11.6833 18.7783 12.1141C19 12.5448 19 13.0494 19 14.0585V19C19 19.9428 19 20.4142 18.7071 20.7071C18.4142 21 17.9428 21 17 21H7C6.05719 21 5.58579 21 5.29289 20.7071C5 20.4142 5 19.9428 5 19V14.0585Z"
            fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
        <path
            d="M3 12.3866C3 12.6535 3 12.7869 3.0841 12.8281C3.16819 12.8692 3.27352 12.7873 3.48418 12.6234L10.7721 6.95502C11.362 6.49625 11.6569 6.26686 12 6.26686C12.3431 6.26686 12.638 6.49625 13.2279 6.95502L20.5158 12.6234C20.7265 12.7873 20.8318 12.8692 20.9159 12.8281C21 12.7869 21 12.6535 21 12.3866V11.9782C21 11.4978 21 11.2576 20.8983 11.0497C20.7966 10.8418 20.607 10.6944 20.2279 10.3995L13.2279 4.95502C12.638 4.49625 12.3431 4.26686 12 4.26686C11.6569 4.26686 11.362 4.49625 10.7721 4.95502L3.77212 10.3995C3.39295 10.6944 3.20337 10.8418 3.10168 11.0497C3 11.2576 3 11.4978 3 11.9782V12.3866Z"
            class="fill-slate-500 dark:fill-navy-200" />
        <path
            d="M12.5 15H11.5C10.3954 15 9.5 15.8954 9.5 17V20.85C9.5 20.9328 9.56716 21 9.65 21H14.35C14.4328 21 14.5 20.9328 14.5 20.85V17C14.5 15.8954 13.6046 15 12.5 15Z"
            class="fill-slate-500 dark:fill-navy-200" />
        <rect x="16" y="5" width="2" height="4" rx="0.5"
            class="fill-slate-500 dark:fill-navy-200" />
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Allowances (asignaciones) -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('construction.assignments')).'','xTooltip.placement.right' => '\'Asignaciones\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('construction.assignments')).'','x-tooltip.placement.right' => '\'Asignaciones\'']); ?>
    <svg version="1.0" fill="none" class="h-8 w-8" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512.000000 512.000000">
    
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path
                d="M4105 5029 c-349 -69 -597 -323 -656 -673 -30 -177 17 -391 120 -549
        l49 -74 -307 -307 -306 -306 -398 0 -398 0 -24 -25 c-16 -15 -25 -36 -25 -55
        0 -19 9 -40 25 -55 l24 -25 376 0 375 0 0 -95 c0 -88 2 -98 25 -120 32 -33 78
        -33 110 0 24 23 25 30 25 142 l0 118 306 306 307 307 74 -49 c136 -88 259
        -124 433 -124 226 0 408 75 564 231 156 156 231 338 231 564 0 174 -36 298
        -124 432 -113 173 -274 288 -481 345 -68 18 -258 25 -325 12z m270 -164 c216
        -45 409 -223 478 -440 31 -99 31 -271 0 -370 -63 -199 -229 -365 -428 -428
        -99 -31 -271 -31 -370 0 -163 52 -309 175 -383 323 -95 189 -95 390 -2 576
        132 262 417 399 705 339z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M4160 4707 c-49 -16 -133 -102 -148 -153 -22 -75 -12 -146 29 -205
        l19 -27 -48 -13 c-61 -17 -142 -96 -160 -155 -7 -23 -12 -92 -12 -153 0 -105
        1 -113 25 -136 l24 -25 351 0 351 0 24 25 c24 23 25 31 25 136 0 137 -11 177
        -68 240 -33 36 -57 53 -97 65 l-54 17 18 26 c63 91 53 204 -26 291 -65 72
        -158 97 -253 67z m135 -172 c16 -15 25 -36 25 -55 0 -19 -9 -40 -25 -55 -15
        -16 -36 -25 -55 -25 -19 0 -40 9 -55 25 -16 15 -25 36 -25 55 0 19 9 40 25 55
        15 16 36 25 55 25 19 0 40 -9 55 -25z m160 -400 c21 -20 25 -34 25 -80 l0 -55
        -240 0 -240 0 0 55 c0 46 4 60 25 80 24 25 26 25 215 25 189 0 191 0 215 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M105 4615 l-25 -24 0 -1991 0 -1991 25 -24 24 -25 1471 0 1471 0 24
        25 25 24 0 551 0 551 -25 24 c-32 33 -78 33 -110 0 l-25 -24 0 -496 0 -495
        -1360 0 -1360 0 0 1880 0 1880 960 0 960 0 0 -375 0 -376 25 -24 24 -25 376 0
        375 0 0 -175 c0 -173 0 -176 25 -200 32 -33 78 -33 110 0 l25 24 0 233 0 233
        -423 422 -422 423 -1073 0 -1073 0 -24 -25z m2480 -515 l260 -260 -263 0 -262
        0 0 260 c0 143 1 260 3 260 1 0 119 -117 262 -260z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 4135 l-25 -24 0 -271 0 -271 25 -24 24 -25 751 0 751 0 24 25
        25 24 0 271 0 271 -25 24 -24 25 -751 0 -751 0 -24 -25z m1415 -295 l0 -160
        -640 0 -640 0 0 160 0 160 640 0 640 0 0 -160z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M4090 3346 c-329 -70 -574 -316 -634 -636 l-12 -65 -623 -5 -623 -5
        -19 -24 c-26 -32 -24 -77 6 -106 l24 -25 376 0 375 0 0 -95 c0 -88 2 -98 25
        -120 15 -16 36 -25 55 -25 19 0 40 9 55 25 23 22 25 32 25 120 l0 95 162 -2
        162 -3 12 -65 c51 -275 250 -508 512 -601 355 -125 736 4 943 319 88 134 124
        258 124 432 0 174 -36 298 -124 432 -113 173 -274 288 -481 345 -78 21 -260
        26 -340 9z m285 -161 c216 -45 409 -223 478 -440 31 -99 31 -271 0 -370 -63
        -199 -229 -365 -428 -428 -99 -31 -271 -31 -370 0 -163 52 -309 175 -383 323
        -95 189 -95 390 -2 576 132 262 417 399 705 339z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M4160 3027 c-49 -16 -133 -102 -148 -153 -22 -75 -12 -146 29 -205
        l19 -27 -48 -13 c-61 -17 -142 -96 -160 -155 -7 -23 -12 -92 -12 -153 0 -105
        1 -113 25 -136 l24 -25 351 0 351 0 24 25 c24 23 25 31 25 136 0 137 -11 177
        -68 240 -33 36 -57 53 -97 65 l-54 17 18 26 c63 91 53 204 -26 291 -65 72
        -158 97 -253 67z m135 -172 c16 -15 25 -36 25 -55 0 -19 -9 -40 -25 -55 -15
        -16 -36 -25 -55 -25 -19 0 -40 9 -55 25 -16 15 -25 36 -25 55 0 19 9 40 25 55
        15 16 36 25 55 25 19 0 40 -9 55 -25z m160 -400 c21 -20 25 -34 25 -80 l0 -55
        -240 0 -240 0 0 55 c0 46 4 60 25 80 24 25 26 25 215 25 189 0 191 0 215 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 3255 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 591
        0 591 0 24 25 c33 32 33 78 0 110 l-24 25 -591 0 -591 0 -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 2855 c-50 -49 -15 -135 55 -135 41 0 80 39 80 80 0 41 -39 80
        -80 80 -19 0 -40 -9 -55 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M665 2855 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 271
        0 271 0 24 25 c33 32 33 78 0 110 l-24 25 -271 0 -271 0 -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 2535 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 49 -50 135
        -15 135 55 0 41 -39 80 -80 80 -19 0 -40 -9 -55 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M665 2535 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 391
        0 391 0 24 25 c16 15 25 36 25 55 0 19 -9 40 -25 55 l-24 25 -391 0 -391 0
        -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 2135 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 591
        0 591 0 24 25 c33 32 33 78 0 110 l-24 25 -591 0 -591 0 -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2185 2135 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 398
        0 398 0 306 -306 307 -307 -49 -74 c-88 -136 -124 -259 -124 -433 0 -226 75
        -408 231 -564 156 -156 338 -231 564 -231 226 0 408 75 564 231 156 156 231
        338 231 564 0 226 -75 408 -231 564 -156 156 -338 231 -564 231 -174 0 -298
        -36 -432 -124 l-73 -49 -330 329 -331 329 -432 0 -433 0 -24 -25z m2190 -630
        c216 -45 409 -223 478 -440 31 -99 31 -271 0 -370 -63 -199 -229 -365 -428
        -428 -99 -31 -271 -31 -370 0 -163 52 -309 175 -383 323 -95 189 -95 390 -2
        576 132 262 417 399 705 339z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M4160 1347 c-49 -16 -133 -102 -148 -153 -22 -75 -12 -146 29 -205
        l19 -27 -48 -13 c-61 -17 -142 -96 -160 -155 -7 -23 -12 -92 -12 -153 0 -105
        1 -113 25 -136 l24 -25 351 0 351 0 24 25 c24 23 25 31 25 136 0 137 -11 177
        -68 240 -33 36 -57 53 -97 65 l-54 17 18 26 c63 91 53 204 -26 291 -65 72
        -158 97 -253 67z m135 -172 c50 -49 15 -135 -55 -135 -41 0 -80 39 -80 80 0
        41 39 80 80 80 19 0 40 -9 55 -25z m160 -400 c21 -20 25 -34 25 -80 l0 -55
        -240 0 -240 0 0 55 c0 46 4 60 25 80 24 25 26 25 215 25 189 0 191 0 215 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M1785 1815 l-25 -24 0 -431 0 -431 25 -24 24 -25 431 0 431 0 24 25
        c25 24 25 26 25 215 0 189 0 191 -25 215 -15 16 -36 25 -55 25 -19 0 -40 -9
        -55 -25 -24 -23 -25 -29 -25 -160 l0 -135 -320 0 -320 0 0 320 0 320 255 0
        256 0 24 25 c16 15 25 36 25 55 0 19 -9 40 -25 55 l-24 25 -311 0 -311 0 -24
        -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2543 1618 l-223 -222 -103 102 c-88 86 -109 102 -136 102 -43 0 -81
        -38 -81 -82 0 -28 18 -50 143 -175 128 -129 146 -143 177 -143 32 0 55 21 297
        263 237 236 263 266 263 295 0 44 -38 82 -82 82 -28 0 -56 -24 -255 -222z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 1735 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 49 -50 135
        -15 135 55 0 41 -39 80 -80 80 -19 0 -40 -9 -55 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M665 1735 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 271
        0 271 0 24 25 c33 32 33 78 0 110 l-24 25 -271 0 -271 0 -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M425 1415 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 49 -50 135
        -15 135 55 0 41 -39 80 -80 80 -19 0 -40 -9 -55 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M665 1415 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 391
        0 391 0 24 25 c16 15 25 36 25 55 0 19 -9 40 -25 55 l-24 25 -391 0 -391 0
        -24 -25z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Materials -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('construction.materials.list')).'','xTooltip.placement.right' => '\'Materiales\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('construction.materials.list')).'','x-tooltip.placement.right' => '\'Materiales\'']); ?>
    <svg version="1.0" class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"
        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
    
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path
                d="M1500 5029 c-192 -64 -270 -95 -284 -111 -10 -13 -70 -125 -132 -250
        l-114 -228 -106 0 c-72 0 -113 -5 -132 -14 -15 -8 -146 -134 -292 -280 l-265
        -266 -3 -145 -3 -145 -37 -1 c-56 0 -105 -21 -119 -49 -10 -20 -13 -382 -13
        -1753 l0 -1729 29 -29 29 -29 2502 0 2502 0 29 29 29 29 0 1987 c0 1404 -3
        1992 -11 2007 -19 36 -69 48 -203 48 l-125 0 -3 145 c-3 135 -5 146 -26 167
        l-23 23 -787 5 -787 5 -672 338 c-370 185 -683 337 -695 336 -13 0 -142 -41
        -288 -90z m810 -354 l465 -234 -802 0 c-442 -1 -803 1 -803 4 0 13 146 295
        152 295 5 0 63 -28 131 -61 149 -75 165 -80 204 -64 25 11 43 37 102 154 39
        78 75 141 79 140 4 0 216 -105 472 -234z m2298 -492 l3 -83 -903 0 c-977 0
        -970 0 -1056 -53 -43 -28 -104 -93 -125 -134 -8 -15 -36 -94 -63 -175 l-48
        -148 -1038 0 -1038 0 0 79 0 80 230 3 230 3 27 28 28 27 3 230 4 230 1871 -2
        1872 -3 3 -82z m-3928 -153 l0 -100 -102 0 -103 0 100 100 c55 55 101 100 102
        100 2 0 3 -45 3 -100z m4268 -1982 l-3 -1873 -2385 0 -2385 0 -3 1618 -2 1617
        1164 0 1164 0 29 24 c23 19 40 59 88 205 63 193 90 241 149 267 25 11 230 13
        1109 14 l1077 0 -2 -1872z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M4094 3747 c-3 -8 -4 -47 -2 -88 l3 -74 258 -3 257 -2 0 -255 0 -255
        85 0 85 0 0 345 0 345 -340 0 c-276 0 -342 -3 -346 -13z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2533 3240 c-36 -15 -1061 -788 -1072 -809 -8 -13 -11 -265 -11 -774
        l0 -755 31 -26 31 -26 1048 0 1048 0 31 26 31 26 0 755 c0 509 -3 761 -11 774
        -20 38 -1081 826 -1102 818 -1 0 -12 -4 -24 -9z m501 -551 l456 -341 0 -100
        c0 -79 -3 -98 -12 -91 -160 125 -870 649 -890 657 -20 7 -36 7 -56 0 -20 -8
        -730 -532 -889 -657 -10 -7 -13 12 -13 91 l0 100 462 346 c254 191 468 344
        474 342 7 -3 218 -159 468 -347z m-2 -420 l468 -351 0 -444 0 -444 -254 0
        -254 0 -5 338 c-3 258 -7 346 -18 377 -75 209 -271 331 -476 296 -160 -27
        -284 -135 -342 -296 -11 -31 -15 -119 -18 -377 l-5 -338 -254 0 -254 0 0 444
        0 444 468 351 c257 193 469 351 471 351 2 0 215 -158 473 -351z m-348 -427
        c53 -29 97 -81 118 -140 10 -28 13 -120 13 -357 l0 -320 -255 0 -255 0 -3 289
        c-3 317 4 377 46 446 29 47 111 105 161 113 50 9 126 -5 175 -31z"
                fill-opacity="0.3" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1450 600 l0 -90 1110 0 1110 0 0 90 0 90 -1110 0 -1110 0 0 -90z" fill-opacity="0.3"
                class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/layouts/sidebar-links/construction-area.blade.php ENDPATH**/ ?>