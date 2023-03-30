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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('supervision.assignments')).'','xTooltip.placement.right' => '\'Asignaciones\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('supervision.assignments')).'','x-tooltip.placement.right' => '\'Asignaciones\'']); ?>
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
<!-- tasks -->

<!-- follow-ups -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('supervision.followups')).'','xTooltip.placement.right' => '\'Seguimientos\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('supervision.followups')).'','x-tooltip.placement.right' => '\'Seguimientos\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 512.000000 512.000000"
        preserveAspectRatio="xMidYMid meet">
    
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
            <path
                d="M2180 4869 c-336 -34 -698 -164 -978 -353 -911 -612 -1221 -1796
        -727 -2771 288 -570 796 -970 1425 -1124 173 -43 285 -55 498 -56 l194 0 24
        28 c30 35 31 68 0 103 l-23 28 -140 -3 c-493 -8 -963 155 -1328 461 -375 314
        -612 725 -695 1204 -70 403 -10 830 170 1203 191 395 511 721 900 916 561 282
        1213 286 1775 11 210 -103 348 -200 518 -366 340 -329 544 -751 597 -1235 13
        -120 13 -251 -2 -414 l-12 -134 28 -23 c34 -30 68 -30 101 -2 32 29 43 91 52
        293 37 911 -506 1749 -1352 2088 -323 130 -680 180 -1025 146z" />
            <path
                d="M2193 4550 c-625 -79 -1154 -448 -1433 -1000 -303 -601 -258 -1301
        119 -1861 323 -480 849 -775 1436 -806 170 -8 271 2 301 33 32 31 30 69 -4
        104 l-29 28 -119 -5 c-489 -22 -991 193 -1317 564 -189 215 -313 462 -383 759
        -27 112 -29 132 -28 349 0 201 2 243 22 332 50 228 153 465 279 643 87 122
        272 306 393 392 116 83 323 188 448 228 196 63 275 74 522 74 198 1 238 -2
        330 -22 302 -66 561 -195 784 -390 411 -359 622 -922 551 -1467 -16 -121 -13
        -144 24 -172 23 -18 66 -16 91 5 31 25 48 121 56 307 10 241 -19 446 -98 673
        -218 633 -750 1090 -1413 1213 -126 23 -414 34 -532 19z" />
            <path
                d="M2345 3735 l-25 -24 0 -384 0 -385 -30 -12 c-68 -28 -130 -129 -130
        -210 0 -124 116 -240 240 -240 81 0 182 62 210 130 l12 30 145 0 c139 0 145 1
        168 25 16 15 25 36 25 55 0 19 -9 40 -25 55 -23 24 -29 25 -168 25 l-145 0
        -12 30 c-14 34 -77 95 -109 105 -21 6 -21 8 -21 391 l0 385 -25 24 c-15 16
        -36 25 -55 25 -19 0 -40 -9 -55 -25z" />
            <path
                d="M3145 2135 c-21 -20 -25 -34 -25 -80 l0 -55 -135 0 c-131 0 -137 -1
        -160 -25 l-25 -24 0 -831 0 -831 25 -24 24 -25 991 0 991 0 24 25 25 24 0 831
        0 831 -25 24 c-23 24 -29 25 -160 25 l-135 0 0 55 c0 67 -29 105 -80 105 -51
        0 -80 -38 -80 -105 l0 -55 -240 0 -240 0 0 55 c0 67 -29 105 -80 105 -51 0
        -80 -38 -80 -105 l0 -55 -240 0 -240 0 0 55 c0 67 -29 105 -80 105 -19 0 -40
        -9 -55 -25z m1575 -375 l0 -80 -880 0 -880 0 0 80 0 80 880 0 880 0 0 -80z
        m-185 -745 c33 -32 33 -78 0 -110 l-24 -25 -671 0 -671 0 -24 25 c-16 15 -25
        36 -25 55 0 19 9 40 25 55 l24 25 671 0 671 0 24 -25z" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/layouts/sidebar-links/supervision-area.blade.php ENDPATH**/ ?>