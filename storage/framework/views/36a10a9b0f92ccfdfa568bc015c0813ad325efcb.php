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
<!-- User and Roles -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.users.index')).'','xTooltip.placement.right' => '\'Usuarios y Roles\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.users.index')).'','x-tooltip.placement.right' => '\'Usuarios y Roles\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" fill="none" class="h-8 w-8"
        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path d="M1714 5100 c-188 -49 -345 -146 -467 -289 -284 -332 -256 -811 64
                -1117 80 -76 137 -114 241 -164 135 -64 219 -83 388 -84 154 -1 229 12 354 61
                145 56 312 190 399 317 123 181 172 405 133 609 -62 320 -315 582 -644 666
                -110 29 -362 29 -468 1z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1670 3272 c0 -87 3 -114 16 -126 13 -14 51 -16 264 -16 213 0 251 2 264 16 13 12 16 39 16 125 0 100 -2 110 -17 105 -45 -14 -215 -36 -273 -36 -59 1 -172 17 -242 35 l-28 7 0 -110z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1132 3021 c-21 -13 378 -377 427 -391 91 -25 141 -7 240 86 l80 75 -134 120 -133 119 -234 0 c-128 0 -239 -4 -246 -9z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1858 2938 l92 -93 92 93 93 92 -185 0 -185 0 93 -92z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M2150 2910 l-125 -120 78 -75 c102 -97 164 -116 253 -76 59 27 430 371 412 382 -7 5 -121 9 -253 8 l-240 0 -125 -119z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M910 2975 c-19 -7 -64 -27 -100 -45 -264 -133 -454 -371 -533 -665 -20 -76 -21 -107 -24 -639 -4 -516 -3 -560 13 -577 17 -18 49 -19 988 -19 l971 0 14 30 c7 17 23 37 35 45 11 7 98 38 191 69 152 49 170 57 170 76 0 20 -18 28 -165 76 -91 29 -173 56 -182 59 -34 12 -62 66 -62 120 0 48 12 72 209 415 189 329 214 367 250 387 84 47 127 29 290 -123 164 -152 167 -151 120 66 -42 191 -43 223 -9 274 39 57 71 66 239 66 l146 0 -33 47 c-50 71 -158 174 -239 228 -82 55 -248 130 -260 118 -4 -4 -220 -402 -479 -883 -260 -481 -478 -882 -486 -889 -10 -11 -20 -13 -40 -5 -22 7 -105 155 -501 889 -261 484 -478 883 -481 886 -4 4 -23 1 -42 -6z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1131 2863 c16 -45 485 -891 490 -885 6 5 179 583 179 596 0 1 -24 -9 -52 -23 -43 -21 -67 -26 -128 -26 -110 1 -140 18 -329 196 -90 84 -162 148 -160 142z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M2596 2718 c-87 -82 -177 -158 -199 -170 -82 -41 -196 -34 -272 18 -31 20 -36 22 -30 7 4 -10 46 -146 92 -303 47 -157 88 -288 92 -292 4 -4 114 193 244 438 131 246 236 448 235 449 -2 1 -74 -65 -162 -147z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M1922 2600 l-21 -51 21 -44 c12 -25 25 -45 28 -45 3 0 16 20 28 45 l21 44 -21 51 c-11 27 -24 50 -28 50 -4 0 -17 -23 -28 -50z" class="fill-slate-500 dark:fill-navy-200" />
            <path d="M3176 2474 c-9 -8 -16 -22 -16 -31 0 -12 48 -232 85 -390 4 -18 -2 -25 -42 -43 -26 -11 -62 -32 -80 -46 l-34 -25 -154 145 c-112 107 -161 146 -179 146 -21 0 -47 -40 -230 -358 -113 -198 -206 -366 -206 -374 0 -25 18 -34 160 -78 74 -22 163 -50 198 -61 l62 -21 0 -88 0 -88 -62 -21 c-35 -11 -124 -39 -198 -61 -142 -44 -160 -53 -160 -78 0 -8 93 -176 206 -374 183 -318 209 -358 230 -358 18 0 67 39 179 146 l154 145 34 -25 c18 -14 54 -35 81 -46 34 -16 46 -26 42 -38 -2 -9 -24 -102 -47 -205 -34 -153 -40 -193 -31 -213 l12 -24 408 0 c400 0 409 0 428 21 18 20 17 24 -25 212 -23 106 -44 200 -47 209 -4 12 8 22 42 38 27 11 63 32 82 46 l34 26 147 -146 c165 -163 181 -171 224 -114 13 18 108 180 211 361 178 309 187 329 173 350 -14 22 -41 32 -297 111 l-115 36 0 90 0 90 115 36 c256 79 283 89 297 111 14 21 5 41 -173 350 -103 181 -198 343 -211 361 -43 57 -59 49 -224 -114 l-147 -146 -34 26 c-19 14 -55 35 -82 46 -34 16 -46 26 -42 38 3 9 24 103 47 209 42 188 43 192 25 212 -19 21 -28 21 -422 21 -353 0 -405 -2 -418 -16z m506 -795 c227 -48 379 -272 340 -499 -32 -189 -173 -330 -362 -362 -135 -23 -266 19 -371 118 -177 170 -184 435 -14 613 110 116 255 162 407 130z" class="fill-slate-900 dark:fill-navy-200" />
            <path d="M1848 2395 c-3 -6 -42 -133 -87 -283 l-81 -273 132 -239 c73 -132 135 -240 138 -240 3 0 63 108 133 240 l127 240 -81 272 c-45 150 -84 277 -87 282 -3 5 -19 -20 -36 -55 -19 -39 -38 -65 -49 -67 -26 -5 -56 25 -81 83 -12 27 -25 45 -28 40z" class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Works -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.works.index')).'','xTooltip.placement.right' => '\'Obras\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.works.index')).'','x-tooltip.placement.right' => '\'Obras\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" fill="none"
        class="h-8 w-8" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path d="M2216 4980 c-16 -77 -34 -146 -40 -154 -6 -7 -36 -21 -66 -30 -30
                -10 -96 -37 -147 -61 l-92 -43 -128 84 -128 83 -219 -218 -219 -219 41 -97
                c23 -53 42 -100 42 -104 0 -5 -33 -11 -73 -14 -161 -14 -306 -93 -404 -222
                -101 -132 -127 -235 -120 -470 3 -104 10 -176 20 -206 32 -97 80 -174 153
                -248 41 -40 74 -81 74 -90 0 -13 -25 -23 -114 -45 l-115 -28 -207 121 -206
                121 -134 0 -134 0 2 -857 3 -856 400 -134 400 -133 85 2 c81 3 84 4 90 28 3
                14 10 25 16 25 5 0 61 -31 125 -68 114 -69 115 -69 126 -118 24 -99 111 -184
                202 -196 36 -5 39 -8 44 -45 12 -90 97 -177 195 -200 46 -11 52 -16 52 -38 0
                -15 12 -50 27 -79 31 -62 89 -108 165 -131 49 -15 51 -17 63 -63 17 -69 61
                -125 124 -161 69 -38 162 -42 226 -9 l40 21 45 -40 c62 -55 113 -79 180 -85
                130 -12 243 69 273 197 11 47 13 49 53 55 90 13 175 100 196 201 8 39 13 44
                36 44 92 1 211 120 212 212 0 22 6 29 28 34 62 13 112 37 146 70 48 46 67 85
                73 151 l6 54 743 372 744 372 0 602 0 603 -96 0 -96 0 -134 -71 -135 -71 -47
                20 c-26 11 -127 39 -224 63 -142 35 -178 47 -178 60 0 9 33 50 74 90 74 74
                121 152 153 248 9 29 17 102 20 196 6 183 -8 263 -68 384 -93 189 -297 321
                -495 321 l-43 0 46 106 46 106 -219 218 -219 219 -128 -83 -128 -84 -92 43
                c-51 24 -117 51 -147 61 -30 9 -60 23 -66 30 -6 8 -24 77 -40 154 l-28 140
                -316 0 -316 0 -28 -140z m554 -163 c15 -70 29 -129 31 -130 2 -2 49 -16 104
                -32 55 -16 156 -57 224 -92 141 -71 117 -73 253 19 48 32 93 58 100 58 18 0
                258 -242 258 -260 -1 -8 -20 -60 -44 -115 -39 -92 -46 -102 -87 -124 -24 -13
                -66 -42 -93 -64 -42 -35 -50 -38 -58 -24 -25 46 -137 174 -195 222 -159 135
                -329 216 -527 250 -374 64 -767 -84 -1004 -380 -34 -41 -65 -83 -70 -92 -9
                -15 -14 -14 -47 13 -20 16 -62 45 -93 65 -53 33 -59 41 -99 134 -24 54 -43
                105 -43 114 0 19 239 261 258 261 7 0 52 -26 100 -58 136 -92 112 -90 253 -19
                68 35 169 76 224 92 55 16 102 30 104 31 2 2 14 54 28 116 13 62 26 121 29
                131 5 16 21 17 186 15 l181 -3 27 -128z m-40 -459 c244 -46 461 -196 604 -417
                l28 -43 -29 -87 c-26 -81 -28 -96 -28 -256 1 -195 13 -258 72 -365 20 -36 67
                -95 105 -133 37 -37 68 -75 68 -85 0 -14 -29 -25 -165 -58 l-165 -41 -165 41
                c-137 34 -165 44 -165 59 0 10 28 44 63 76 73 69 129 158 160 256 19 61 22 92
                22 240 0 136 -4 182 -18 230 -65 212 -231 373 -433 421 -90 21 -225 14 -311
                -16 -169 -59 -308 -201 -364 -372 -22 -66 -24 -90 -24 -253 0 -158 3 -188 22
                -250 31 -98 87 -187 161 -256 34 -32 62 -66 62 -76 0 -15 -28 -25 -165 -59
                l-165 -41 -165 41 c-131 32 -165 44 -165 57 0 9 31 48 68 85 38 38 85 98 105
                134 59 106 72 170 71 360 0 156 -2 170 -30 251 l-29 86 30 50 c195 322 574
                491 945 421z m-1352 -340 c101 -38 200 -137 243 -245 22 -53 24 -73 24 -233
                l0 -175 -34 -69 c-37 -77 -103 -149 -169 -186 l-43 -24 3 -130 3 -130 135 -34
                c74 -18 136 -35 138 -37 2 -2 -7 -19 -21 -37 -54 -72 -84 -162 -90 -268 l-2
                -44 -120 -28 c-66 -15 -122 -27 -125 -28 -3 0 -4 39 -2 88 l3 87 -214 125
                c-119 69 -210 128 -204 131 7 4 47 15 90 25 l77 18 0 132 0 132 -49 32 c-68
                43 -117 100 -155 179 -30 65 -31 70 -34 233 -3 138 -1 177 14 220 25 78 59
                132 117 184 116 105 270 135 415 82z m1307 5 c135 -47 243 -170 275 -313 7
                -34 11 -109 8 -200 -3 -134 -5 -150 -31 -204 -36 -79 -87 -139 -153 -183 l-54
                -36 0 -131 0 -131 238 -59 c252 -63 314 -86 356 -137 54 -64 59 -89 60 -289
                l1 -185 -37 -3 c-24 -2 -131 23 -300 71 -145 41 -286 78 -313 82 -28 4 -142
                35 -255 70 -251 78 -265 82 -367 94 -77 10 -201 4 -336 -15 l-48 -7 7 44 c15
                93 58 156 133 193 25 13 153 50 284 82 l237 59 0 131 0 132 -49 32 c-68 43
                -117 100 -155 179 l-31 66 0 186 0 185 38 76 c92 187 302 277 492 211z m1320
                0 c104 -33 187 -109 243 -221 l37 -76 0 -180 0 -181 -31 -66 c-38 -79 -87
                -136 -155 -179 l-49 -32 0 -132 0 -132 200 -49 c152 -37 197 -52 187 -61 -13
                -12 -872 -464 -881 -464 -3 0 -6 60 -6 133 0 171 -20 245 -87 335 -14 18 -23
                35 -21 37 2 2 64 19 138 37 l135 34 3 130 3 130 -43 24 c-66 37 -132 109 -169
                186 -32 67 -33 73 -37 219 -6 222 20 310 124 411 113 110 257 144 409 97z
                m-3482 -1224 c160 -94 293 -171 294 -172 3 -3 -294 -1187 -299 -1192 -2 -3
                -82 21 -176 53 l-172 57 0 712 0 713 30 0 c21 0 119 -52 323 -171z m4427 -472
                l0 -462 -693 -346 -693 -347 -364 329 c-419 378 -443 394 -570 394 -93 0 -116
                -9 -299 -120 -200 -120 -215 -127 -256 -119 -72 13 -112 94 -81 167 14 34 32
                45 283 170 280 140 348 165 426 152 23 -4 167 -43 320 -86 189 -54 294 -79
                330 -79 49 0 94 23 817 404 421 223 768 405 773 405 4 1 7 -207 7 -462z
                m-3797 103 c6 -5 -296 -1094 -307 -1107 -5 -6 -166 52 -166 59 0 9 278 1124
                285 1145 3 8 34 -5 92 -39 48 -28 92 -54 96 -58z m982 -130 c69 -11 235 -60
                235 -69 0 -4 -95 -54 -212 -111 -300 -148 -333 -182 -333 -345 0 -106 16 -147
                82 -212 50 -48 115 -73 192 -73 68 0 106 17 296 131 77 47 153 90 168 97 36
                16 98 15 134 0 42 -19 735 -643 756 -681 33 -61 -9 -127 -82 -127 -35 0 -59
                17 -272 195 -129 107 -236 194 -239 194 -6 0 -100 -115 -100 -122 0 -3 96 -85
                213 -182 214 -178 247 -211 247 -253 0 -36 -52 -82 -92 -82 -42 0 -40 -1 -298
                213 l-215 179 -52 -58 c-29 -33 -53 -61 -53 -64 0 -3 97 -86 216 -185 119 -99
                222 -189 230 -200 22 -32 17 -78 -12 -106 -35 -33 -92 -31 -141 7 -75 56 -203
                166 -203 175 0 4 -19 26 -42 48 -39 38 -109 71 -150 71 -13 0 -18 8 -18 28 0
                15 -12 52 -27 81 -31 62 -89 108 -165 131 -49 15 -51 17 -63 62 -6 26 -24 65
                -38 87 -29 43 -117 101 -154 101 -30 0 -49 22 -57 67 -17 99 -133 187 -246
                186 -89 -1 -139 -29 -253 -143 l-99 -99 -120 71 c-65 39 -121 75 -124 79 -4 7
                209 765 218 774 4 4 560 128 618 138 49 8 196 7 255 -3z m-452 -992 c34 -18
                46 -40 47 -82 0 -35 -8 -46 -82 -123 -46 -47 -96 -91 -111 -100 -59 -30 -129
                14 -129 83 0 34 9 46 99 136 104 102 126 113 176 86z m265 -258 c25 -24 37
                -60 28 -92 -3 -13 -48 -65 -99 -116 -85 -85 -98 -94 -131 -94 -64 0 -106 57
                -86 117 7 20 47 68 100 119 81 78 93 86 128 86 25 0 46 -7 60 -20z m257 -262
                c46 -55 32 -89 -88 -205 -78 -76 -88 -83 -125 -83 -33 0 -45 6 -66 31 -46 54
                -37 80 62 182 119 123 164 138 217 75z m242 -240 c52 -49 39 -94 -60 -195
                -106 -110 -148 -126 -206 -77 -25 21 -31 33 -31 65 0 36 8 47 80 123 114 118
                161 136 217 84z m255 -243 c10 -11 18 -35 18 -54 0 -82 -89 -108 -168 -50 -23
                17 -42 34 -42 38 0 4 13 20 30 36 16 16 42 46 56 67 l27 39 31 -28 c17 -15 39
                -37 48 -48z" class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Services -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.services.index')).'','xTooltip.placement.right' => '\'Servicios\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.services.index')).'','x-tooltip.placement.right' => '\'Servicios\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" fill="none"
        class="h-9 w-9" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path
                d="M2353 4848 c-17 -18 -23 -42 -29 -108 -8 -98 -17 -130 -39 -130 -8 0
                -56 -18 -107 -40 -74 -32 -95 -37 -107 -27 -9 6 -44 35 -79 64 -97 81 -99 80
                -259 -80 -104 -103 -133 -139 -133 -159 0 -18 22 -54 69 -110 l69 -84 -26 -49
                c-14 -28 -36 -77 -48 -110 l-22 -60 -73 -8 c-122 -13 -139 -17 -160 -38 -17
                -17 -19 -34 -19 -204 0 -181 1 -187 23 -209 19 -19 39 -25 103 -30 132 -11
                128 -10 149 -74 9 -31 28 -78 41 -104 13 -26 24 -52 24 -57 0 -6 -22 -36 -48
                -68 -70 -84 -85 -110 -79 -135 9 -33 269 -288 294 -288 22 0 46 16 134 91 l55
                48 58 -29 c32 -17 82 -37 111 -46 60 -19 58 -15 71 -157 10 -117 11 -117 240
                -117 235 0 220 -12 240 191 6 64 7 67 36 73 16 3 67 23 112 44 l82 39 84 -69
                c113 -93 109 -94 273 70 156 158 156 156 62 268 -36 43 -65 82 -65 86 0 5 13
                34 29 66 16 31 35 76 42 100 7 24 20 47 28 51 9 5 56 12 105 16 74 6 93 11
                112 31 23 23 24 27 24 209 0 211 -3 219 -82 229 -24 3 -72 9 -107 13 l-63 8
                -22 60 c-12 33 -34 82 -48 110 l-26 49 69 84 c46 56 69 92 69 109 0 20 -31 57
                -132 160 -159 161 -158 160 -262 75 -39 -32 -76 -61 -83 -65 -7 -4 -34 3 -60
                16 -26 14 -76 35 -110 47 l-62 22 -6 67 c-18 191 -4 181 -243 181 -183 0 -189
                -1 -209 -22z m311 -180 c16 -155 20 -161 113 -184 32 -9 104 -38 160 -66 118
                -59 114 -60 211 21 34 28 65 51 69 51 5 0 37 -29 72 -64 l64 -65 -62 -77 c-33
                -42 -61 -86 -61 -98 0 -11 22 -65 50 -119 27 -54 54 -123 61 -153 16 -70 36
                -91 96 -98 26 -3 72 -8 101 -12 l52 -6 0 -98 0 -98 -95 -7 c-66 -5 -101 -12
                -114 -23 -10 -10 -29 -51 -41 -92 -12 -41 -41 -112 -66 -157 -24 -46 -44 -92
                -44 -103 0 -10 29 -55 64 -98 l64 -79 -68 -68 -69 -68 -75 61 c-49 41 -83 62
                -101 62 -14 0 -58 -18 -98 -39 -40 -22 -112 -52 -160 -66 -56 -18 -91 -34 -98
                -46 -8 -16 -29 -154 -29 -196 0 -10 -26 -13 -98 -13 l-99 0 -10 99 c-5 55 -15
                107 -22 115 -8 9 -45 25 -85 37 -39 12 -109 41 -157 65 -47 24 -97 44 -111 44
                -17 0 -51 -20 -98 -60 -39 -33 -75 -60 -78 -60 -10 0 -132 123 -132 133 0 4
                27 40 60 79 71 85 74 104 26 184 -19 31 -49 102 -67 157 -21 64 -40 104 -53
                113 -12 7 -63 16 -113 20 l-93 7 0 97 0 98 48 6 c26 3 71 8 100 12 65 7 85 27
                101 98 7 30 34 99 61 153 28 54 50 108 50 119 0 12 -28 56 -61 98 l-62 77 68
                69 68 68 79 -64 c43 -35 88 -64 100 -64 11 0 43 13 69 30 54 33 148 74 194 84
                90 20 100 34 110 159 l7 87 98 0 98 0 6 -62z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2414 4386 c-201 -46 -386 -189 -473 -367 -57 -118 -75 -193 -75
                -319 1 -122 19 -202 70 -306 128 -262 418 -419 706 -383 169 21 288 80 414
                205 68 67 89 96 127 175 59 121 82 230 74 354 -17 286 -209 532 -484 622 -96
                32 -264 40 -359 19z m281 -141 c247 -65 424 -290 425 -541 0 -76 -31 -200 -67
                -267 -43 -80 -143 -179 -221 -220 -97 -51 -172 -70 -273 -70 -267 1 -489 185
                -545 453 -58 279 132 576 412 644 79 19 197 19 269 1z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2800 3933 c-8 -4 -82 -71 -163 -150 l-149 -143 -81 75 c-89 81 -120
                92 -157 55 -42 -42 -29 -68 93 -188 88 -87 120 -112 141 -112 21 0 66 37 211
                176 101 96 186 182 189 191 21 54 -33 115 -84 96z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M3475 2170 c-65 -10 -100 -25 -277 -121 l-148 -81 -238 4 c-261 4
                -244 1 -428 82 -137 61 -220 78 -374 78 -165 0 -249 -19 -395 -91 -74 -37
                -127 -73 -205 -140 -107 -93 -196 -150 -209 -135 -4 5 -23 60 -41 122 -23 76
                -40 118 -54 128 -17 11 -79 14 -341 14 -309 0 -322 -1 -343 -20 -14 -14 -22
                -33 -22 -55 0 -30 183 -1555 196 -1633 3 -18 14 -42 25 -53 18 -18 37 -19 490
                -19 301 0 477 4 489 10 46 24 45 40 -20 252 -34 110 -60 202 -58 203 26 26
                378 237 407 245 36 10 93 1 484 -71 l442 -81 140 5 c112 4 157 10 228 31 145
                43 51 -17 1235 796 259 178 272 190 258 243 -10 40 -82 112 -148 147 -55 29
                -75 35 -151 38 -72 4 -98 1 -148 -17 l-60 -22 -38 31 c-98 77 -225 97 -327 51
                l-52 -22 -53 29 c-89 49 -171 65 -264 52z m136 -146 c16 -3 29 -10 27 -15 -2
                -6 -48 -34 -103 -63 l-100 -54 -59 30 c-65 33 -66 31 18 74 77 40 123 46 217
                28z m-1403 -54 c39 -11 111 -38 158 -60 160 -74 152 -73 539 -79 l350 -6 57
                -28 c31 -15 71 -44 88 -64 31 -35 78 -119 69 -126 -2 -2 -110 1 -239 6 -246
                11 -476 1 -519 -23 -29 -15 -41 -48 -29 -83 16 -44 34 -48 173 -35 99 9 191 9
                422 -1 l296 -12 23 22 c13 12 24 32 24 44 0 19 53 51 348 210 327 177 351 189
                410 193 65 5 138 -15 161 -42 9 -10 -125 -106 -602 -434 -338 -232 -636 -431
                -663 -442 -87 -38 -202 -60 -309 -60 -115 0 -89 -4 -595 89 -400 74 -423 76
                -512 45 -21 -7 -113 -61 -204 -119 -91 -58 -169 -105 -173 -105 -4 0 -59 168
                -121 373 -62 204 -115 377 -116 382 -2 6 26 23 61 39 38 17 97 57 141 95 188
                163 302 220 484 244 64 9 206 -3 278 -23z m1828 8 c16 -7 28 -18 28 -23 -1 -6
                -68 -46 -150 -90 -82 -44 -188 -102 -235 -128 l-87 -47 -26 49 -26 50 73 39
                c171 94 293 159 307 165 22 9 83 1 116 -15z m-2797 -826 c123 -405 226 -743
                229 -750 3 -9 -74 -12 -366 -12 l-371 0 -6 33 c-8 49 -175 1427 -175 1448 0
                18 11 19 233 19 l232 0 224 -738z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M982 769 c-116 -57 -135 -222 -36 -308 139 -123 354 14 304 194 -31
                112 -160 167 -268 114z m128 -138 c16 -31 12 -49 -15 -67 -23 -15 -27 -15 -50
                0 -27 18 -33 54 -13 74 19 19 66 15 78 -7z"
                class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Construcions -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.construction.index')).'','xTooltip.placement.right' => '\'Área de Construcción\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.construction.index')).'','x-tooltip.placement.right' => '\'Área de Construcción\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" fill="none" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" class="h-8 w-8">
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path
                d="M1054 5098 c-16 -13 -257 -212 -535 -444 -326 -272 -508 -430 -512
                -445 -4 -13 -7 -185 -7 -381 l0 -357 24 -28 24 -28 316 -3 316 -3 2 -1680 3
                -1681 28 -24 28 -24 365 0 c243 0 372 4 386 11 49 26 48 10 48 1059 l0 980
                228 0 229 0 24 26 24 26 3 654 2 654 850 0 850 0 0 -179 0 -179 -30 -12 c-38
                -16 -97 -81 -117 -129 -25 -58 -20 -148 10 -208 26 -50 71 -96 114 -116 22
                -10 23 -14 23 -149 l0 -138 -564 0 c-310 0 -572 -3 -581 -6 -38 -15 -45 -55
                -45 -253 0 -186 0 -190 24 -218 l24 -28 1232 0 1232 0 24 28 c24 28 24 32 24
                218 0 198 -7 238 -45 253 -9 3 -271 6 -581 6 l-564 0 0 138 c0 135 1 139 23
                149 43 20 88 66 114 116 30 60 35 150 10 208 -20 48 -79 113 -117 129 l-30 12
                0 179 0 179 465 0 c508 0 525 2 545 55 6 16 10 172 10 385 l0 359 -24 28 -24
                28 -362 3 -363 3 -1528 424 c-841 234 -1537 425 -1548 425 -10 0 -31 -10 -47
                -22z m1341 -509 c594 -165 1091 -304 1105 -309 15 -5 -387 -8 -984 -7 l-1010
                2 -118 295 c-147 367 -137 334 -102 326 16 -4 515 -142 1109 -307z m-1182 -41
                c53 -134 99 -251 103 -260 6 -17 -8 -18 -206 -18 -198 0 -212 1 -206 18 41
                109 201 502 206 502 3 0 50 -109 103 -242z m-406 -39 l-93 -234 -195 -3 -194
                -2 30 24 c17 13 145 121 285 239 140 118 256 213 258 212 2 -1 -39 -108 -91
                -236z m-247 -412 c0 -1 -88 -90 -195 -197 l-195 -195 0 198 0 197 195 0 c107
                0 195 -1 195 -3z m490 -192 l-195 -195 -3 182 c-1 100 0 188 2 195 4 10 51 13
                198 13 l193 0 -195 -195z m870 187 c0 -4 -85 -93 -190 -197 l-190 -190 0 198
                0 197 190 0 c105 0 190 -3 190 -8z m680 0 c0 -4 -85 -93 -190 -197 l-190 -190
                0 198 0 197 190 0 c105 0 190 -3 190 -8z m690 5 c0 -1 -88 -90 -195 -197
                l-195 -195 0 198 0 197 195 0 c107 0 195 -1 195 -3z m490 -192 l-195 -195 -3
                182 c-1 100 0 188 2 195 4 10 51 13 198 13 l193 0 -195 -195z m870 187 c0 -4
                -85 -93 -190 -197 l-190 -190 0 198 0 197 190 0 c105 0 190 -3 190 -8z m-3970
                -317 l0 -195 -190 0 c-104 0 -190 3 -190 7 0 7 371 383 377 383 2 0 3 -88 3
                -195z m686 -182 c-4 -10 -51 -13 -198 -13 l-193 0 195 195 195 195 3 -182 c1
                -100 0 -188 -2 -195z m680 0 c-4 -10 -51 -13 -198 -13 l-193 0 195 195 195
                195 3 -182 c1 -100 0 -188 -2 -195z m684 182 l0 -195 -190 0 c-104 0 -190 3
                -190 7 0 7 371 383 377 383 2 0 3 -88 3 -195z m680 0 l0 -195 -190 0 c-104 0
                -190 3 -190 7 0 7 371 383 377 383 2 0 3 -88 3 -195z m686 -182 c-4 -10 -51
                -13 -198 -13 l-193 0 195 195 195 195 3 -182 c1 -100 0 -188 -2 -195z m684
                182 l0 -195 -197 0 -198 0 195 195 c107 107 196 195 197 195 2 0 3 -88 3 -195z
                m-3760 -830 c0 -496 2 -519 48 -544 14 -7 152 -11 416 -11 l396 0 0 -85 0 -85
                -515 0 -515 0 0 595 0 595 85 0 85 0 0 -465z m860 40 l0 -425 -112 0 -111 0
                66 69 c54 55 67 75 67 100 0 45 -38 81 -86 81 -34 0 -48 -10 -164 -125 l-126
                -125 -49 0 -49 0 152 153 c159 160 169 177 141 228 -15 30 -67 49 -99 38 -14
                -5 -89 -72 -165 -149 -77 -77 -143 -140 -147 -140 -5 0 -8 162 -8 360 l0 360
                345 0 345 0 0 -425z m2015 -110 c44 -43 31 -112 -25 -135 -35 -15 -84 0 -100
                31 -30 55 10 129 70 129 19 0 40 -9 55 -25z m1055 -830 l0 -85 -1110 0 -1110
                0 0 85 0 85 1110 0 1110 0 0 -85z m-3710 2 c0 -1 -88 -90 -195 -197 l-195
                -195 0 198 0 197 195 0 c107 0 195 -1 195 -3z m130 -317 l0 -190 -197 0 -198
                0 190 190 c104 105 193 190 197 190 5 0 8 -85 8 -190z m-320 -555 l-195 -195
                -3 182 c-1 100 0 188 2 195 4 10 51 13 198 13 l193 0 -195 -195z m316 -312
                c-4 -10 -51 -13 -198 -13 l-193 0 195 195 195 195 3 -182 c1 -100 0 -188 -2
                -195z m-311 -373 c-104 -104 -193 -190 -197 -190 -5 0 -8 86 -8 190 l0 190
                197 0 198 0 -190 -190z m313 -127 l-3 -188 -195 -3 -195 -2 190 190 c104 104
                193 190 198 190 4 0 6 -84 5 -187z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2602 1183 c-7 -3 -19 -18 -27 -33 -13 -25 -15 -111 -15 -560 l0
                -532 29 -29 29 -29 1222 0 1222 0 29 29 29 29 0 532 c0 560 -1 577 -45 594
                -20 7 -2454 7 -2473 -1z m2348 -588 l0 -425 -1110 0 -1110 0 0 425 0 425 1110
                0 1110 0 0 -425z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.6" />
            <path
                d="M2932 830 c-32 -30 -34 -47 -30 -253 4 -248 -13 -231 235 -235 206
                -4 223 -2 253 30 19 20 20 35 20 225 0 273 20 253 -253 253 -190 0 -205 -1
                -225 -20z m308 -235 l0 -85 -85 0 -85 0 0 85 0 85 85 0 85 0 0 -85z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.5" />
            <path
                d="M3609 824 c-23 -25 -24 -31 -27 -202 -4 -202 3 -244 48 -267 42 -22
                378 -22 420 0 45 23 52 65 48 267 -3 171 -4 177 -27 202 l-24 26 -207 0 -207
                0 -24 -26z m319 -226 l-3 -83 -85 0 -85 0 -3 83 -3 82 91 0 91 0 -3 -82z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.5" />
            <path
                d="M4295 825 c-25 -24 -25 -25 -25 -228 0 -190 1 -205 20 -225 30 -32
                47 -34 253 -30 248 4 231 -13 235 235 4 206 2 223 -30 253 -20 19 -35 20 -225
                20 -203 0 -204 0 -228 -25z m315 -230 l0 -85 -85 0 -85 0 0 85 0 85 85 0 85 0
                0 -85z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.5" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Studies -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.supervision.index')).'','xTooltip.placement.right' => '\'Área de Supervisión\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.supervision.index')).'','x-tooltip.placement.right' => '\'Área de Supervisión\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" fill="none"
        height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"
        class="h-8 w-8">

        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
            <path
                d="M1075 5108 c-82 -15 -223 -89 -287 -150 -73 -71 -133 -165 -161 -253
                l-22 -70 0 -2075 0 -2075 22 -70 c28 -88 88 -182 161 -253 67 -64 207 -135
                296 -151 88 -16 3189 -15 3219 1 47 25 46 17 47 524 l0 481 62 6 c51 5 67 10
                85 32 l23 26 0 1992 c-1 1550 -3 1996 -13 2008 -7 9 -22 21 -34 27 -27 15
                -3320 15 -3398 0z m205 -1908 l0 -1750 85 0 85 0 0 1750 0 1750 1450 0 1450 0
                0 -1880 0 -1880 -1621 0 c-1786 0 -1672 4 -1803 -62 -34 -16 -82 -48 -108 -70
                l-48 -39 0 1778 c0 1928 -3 1834 54 1933 39 68 114 140 182 172 71 33 125 45
                212 47 l62 1 0 -1750z m2900 -2350 l0 -170 -1495 0 -1496 0 3 -82 3 -83 1493
                -3 1492 -2 0 -170 0 -170 -1504 0 c-981 0 -1522 4 -1557 10 -80 15 -168 61
                -222 116 -228 229 -132 611 177 709 33 10 358 13 1574 14 l1532 1 0 -170z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path d="M2820 4350 l0 -170 85 0 85 0 0 170 0 170 -85 0 -85 0 0 -170z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M1995 4150 l-60 -60 123 -122 122 -123 55 55 c30 30 55 59 55 65 0 6 -53 63 -118 128 l-117 117 -60 -60z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path d="M3625 4090 l-120 -120 60 -60 60 -60 120 120 120 120 -60 60 -60 60 -120 -120z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path
                d="M2725 3991 c-323 -81 -554 -348 -584 -675 -23 -246 61 -462 245 -634
                l84 -79 0 -139 c1 -184 12 -260 48 -339 76 -161 232 -253 411 -243 194 11 360
                161 391 353 5 33 10 130 10 216 l0 156 43 34 c127 99 224 248 272 419 27 97
                26 280 -4 385 -62 223 -225 411 -436 504 -136 60 -338 78 -480 42z m355 -181
                c284 -92 462 -386 406 -671 -30 -147 -88 -248 -199 -347 -107 -94 -237 -142
                -387 -142 -166 0 -298 57 -420 180 -128 130 -176 256 -168 445 5 95 10 121 38
                188 121 291 437 441 730 347z m-180 -1331 c68 0 132 7 183 19 l77 19 0 -63 0
                -64 -255 0 -255 0 0 63 0 63 73 -18 c48 -13 107 -19 177 -19z m240 -267 c0
                -12 -52 -83 -76 -104 -44 -39 -115 -61 -179 -56 -95 8 -166 53 -206 131 l-19
                37 240 0 c132 0 240 -4 240 -8z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.6" />
            <path
                d="M2799 3343 l-70 -67 -54 54 -55 54 -60 -59 -60 -59 82 -84 c130 -132
                158 -136 260 -35 l57 57 63 -60 c103 -99 123 -96 258 40 l84 86 -59 60 -59 60
                -58 -57 -58 -57 -68 67 c-92 91 -109 91 -203 0z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.6" />
            <path d="M1620 3245 l0 -85 170 0 170 0 0 85 0 85 -170 0 -170 0 0 -85z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path d="M3840 3245 l0 -85 170 0 170 0 0 85 0 85 -170 0 -170 0 0 -85z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path d="M2055 2520 l-120 -120 60 -60 60 -60 120 120 120 120 -60 60 -60 60 -120 -120z"
                class="fill-slate-500 dark:fill-navy-200" />
            <path d="M3565 2580 l-60 -60 120 -120 120 -120 60 60 60 60 -120 120 -120 120 -60 -60z"
                class="fill-slate-500 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Supervisions -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.icon-sidebar','data' => ['href' => ''.e(route('admin.study.index')).'','xTooltip.placement.right' => '\'Área de Estudios\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.icon-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.study.index')).'','x-tooltip.placement.right' => '\'Área de Estudios\'']); ?>
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"
        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" class="h-8 w-8">
    
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
            <path
                d="M2492 5098 c-11 -13 -73 -108 -136 -212 -130 -213 -137 -236 -87
                -287 23 -23 39 -29 70 -29 l41 0 0 -342 c0 -205 4 -358 10 -380 21 -76 87
                -128 164 -130 62 -1 111 18 145 58 41 46 46 69 46 206 0 108 -2 119 -22 139
                -30 30 -80 30 -105 0 -15 -19 -18 -41 -18 -126 0 -81 -3 -107 -16 -119 -19
                -20 -19 -20 -38 0 -14 13 -16 64 -16 402 0 430 1 425 -65 438 l-34 6 67 109
                c36 60 67 107 68 106 1 -1 31 -50 67 -108 l65 -107 -31 -6 c-63 -13 -67 -24
                -67 -183 0 -130 2 -145 20 -163 25 -25 71 -26 101 -1 21 17 24 29 27 110 l4
                91 40 0 c30 0 46 7 69 29 50 50 43 73 -87 286 -64 105 -125 200 -137 213 -16
                17 -31 22 -72 22 -41 0 -56 -5 -73 -22z"
                class="fill-slate-600 dark:fill-navy-200" />
            <path
                d="M929 4451 c-20 -21 -29 -39 -29 -63 0 -18 23 -131 52 -251 59 -249
                69 -267 139 -267 30 0 52 8 77 26 l34 27 251 -251 c139 -138 265 -256 280
                -261 91 -35 203 14 236 102 14 36 14 98 1 134 -6 15 -124 141 -262 279 l-251
                252 27 34 c18 25 26 47 26 77 0 70 -18 80 -267 139 -120 29 -233 52 -251 52
                -24 0 -42 -9 -63 -29z m271 -167 l107 -25 -19 -39 c-16 -32 -17 -43 -8 -62 7
                -13 134 -145 282 -294 271 -272 295 -303 244 -312 -14 -3 -94 71 -290 266
                -149 148 -281 275 -294 282 -19 9 -30 8 -62 -8 l-39 -19 -25 107 c-30 121 -30
                130 -14 130 6 0 60 -11 118 -26z"
                class="fill-slate-600 dark:fill-navy-200" />
            <path
                d="M3875 4426 c-115 -28 -216 -55 -224 -60 -20 -13 -41 -70 -34 -97 3
                -13 17 -39 31 -58 l25 -33 -251 -252 c-138 -138 -256 -264 -262 -279 -34 -92
                15 -203 103 -236 41 -16 103 -13 140 5 18 9 143 126 278 261 l247 246 35 -27
                c65 -49 136 -33 162 38 19 53 105 416 105 445 0 56 -47 101 -105 100 -22 0
                -134 -24 -250 -53z m185 -123 c0 -5 -12 -58 -26 -120 l-27 -112 -36 20 c-20
                11 -44 16 -56 13 -11 -3 -144 -130 -296 -281 -277 -276 -308 -300 -317 -249
                -3 14 71 94 267 290 148 149 274 283 280 297 7 21 5 35 -9 62 l-19 35 97 25
                c102 26 142 32 142 20z"
                class="fill-slate-600 dark:fill-navy-200" />
            <path
                d="M2431 3605 c-297 -54 -537 -278 -611 -568 -14 -55 -21 -129 -26 -245
                -5 -154 -8 -171 -32 -222 -71 -146 6 -325 161 -374 l54 -17 17 -62 c26 -93 73
                -174 149 -254 l68 -71 -3 -67 -3 -67 -366 -143 c-201 -78 -388 -155 -415 -171
                -68 -39 -163 -138 -201 -209 -67 -127 -68 -138 -68 -575 l0 -395 25 -45 c14
                -24 45 -58 68 -75 l44 -30 564 -3 564 -3 25 25 c32 32 32 70 0 101 l-24 25
                -315 0 -315 0 -3 314 c-3 292 -4 315 -22 335 -26 29 -76 28 -104 -2 -22 -23
                -22 -29 -22 -335 l0 -312 -148 0 c-104 0 -153 4 -166 13 -16 11 -17 42 -14
                407 l3 395 28 59 c33 72 82 133 134 169 21 15 171 78 333 141 l294 114 67 -63
                c105 -98 263 -165 394 -165 131 0 285 65 393 165 l71 66 288 -111 c181 -69
                308 -125 343 -148 64 -44 122 -116 152 -192 21 -53 23 -71 26 -432 3 -370 3
                -377 -17 -397 -19 -19 -33 -21 -171 -21 l-150 0 0 315 c0 302 -1 316 -20 335
                -22 22 -60 26 -90 10 -35 -19 -40 -64 -40 -366 l0 -294 -314 0 c-292 0 -315
                -1 -337 -19 -32 -26 -32 -86 0 -112 22 -18 51 -19 575 -19 620 0 600 -2 664
                76 51 61 54 99 50 514 -4 313 -7 383 -21 425 -42 129 -138 253 -244 315 -33
                19 -222 98 -421 175 l-362 140 0 79 0 78 58 62 c65 70 115 157 136 239 18 71
                22 77 47 77 32 0 114 47 144 82 76 89 89 205 37 311 -30 61 -31 65 -35 242 -6
                222 -28 302 -122 445 -118 177 -302 299 -510 335 -104 18 -164 18 -264 0z
                m331 -172 c104 -36 179 -85 257 -169 67 -71 132 -193 150 -282 13 -61 15 -262
                3 -262 -5 0 -16 17 -25 39 -10 21 -64 87 -121 146 l-103 108 -54 -5 c-40 -4
                -72 -16 -124 -47 -160 -95 -322 -140 -536 -150 -138 -6 -159 -10 -187 -29 -17
                -13 -34 -31 -37 -42 -4 -11 -13 -20 -21 -20 -20 0 -19 201 2 283 36 139 138
                282 261 363 158 105 354 129 535 67z m247 -943 c1 -118 -4 -243 -9 -278 -20
                -143 -117 -273 -247 -335 -58 -27 -82 -32 -165 -35 -80 -4 -107 0 -163 18
                -125 42 -226 139 -276 268 -21 53 -23 73 -23 292 l-1 235 120 6 c190 10 353
                55 520 143 l100 53 72 -76 72 -76 0 -215z m204 42 c23 -25 36 -72 30 -106 -6
                -28 -54 -86 -72 -86 -7 0 -11 38 -11 115 0 107 1 115 18 106 9 -5 25 -18 35
                -29z m-1243 -82 c0 -60 -4 -110 -9 -110 -22 0 -62 45 -71 80 -8 30 -7 47 4 73
                13 31 49 67 68 67 5 0 8 -49 8 -110z m450 -745 c72 -19 233 -19 296 0 27 8 54
                15 60 15 7 0 13 -26 16 -66 4 -62 7 -69 42 -101 l38 -35 -34 -30 c-48 -42
                -146 -87 -214 -98 -107 -17 -233 18 -324 91 l-40 32 39 33 c39 33 61 88 61
                148 0 14 1 26 3 26 1 0 27 -7 57 -15z"
                class="fill-slate-500 dark:fill-navy-200" fill-opacity="0.8" />
            <path
                d="M494 3025 c-210 -128 -244 -157 -244 -210 0 -52 33 -80 245 -209 213
                -130 236 -137 286 -87 22 23 29 39 29 70 l0 40 363 3 c314 3 366 5 392 20 66
                36 97 91 96 170 0 80 -51 146 -129 168 -22 6 -175 10 -379 10 l-343 0 0 41 c0
                31 -6 47 -29 70 -51 50 -74 43 -287 -86z m198 -157 c18 -17 53 -18 408 -18
                340 0 391 -2 404 -16 20 -19 20 -19 0 -38 -13 -14 -64 -16 -408 -16 -436 0
                -418 3 -432 -67 l-6 -31 -108 66 c-60 37 -108 68 -107 69 1 1 49 30 107 66
                l105 64 8 -31 c4 -17 17 -39 29 -48z"
                class="fill-slate-600 dark:fill-navy-200" />
            <path
                d="M4349 3111 c-23 -23 -29 -39 -29 -70 l0 -41 -342 0 c-205 0 -358 -4
                -380 -10 -79 -22 -131 -91 -131 -175 0 -55 18 -98 55 -131 53 -49 53 -49 436
                -52 l362 -3 0 -40 c0 -31 7 -47 29 -70 50 -49 71 -43 291 91 108 66 205 129
                216 141 29 32 26 102 -6 133 -14 13 -110 77 -215 140 -213 130 -235 137 -286
                87z m323 -297 c-1 -5 -47 -37 -101 -71 l-99 -61 -6 34 c-13 65 -8 64 -438 64
                -338 0 -389 2 -402 16 -12 12 -13 20 -6 35 10 18 26 19 405 19 384 0 396 1
                415 20 11 11 23 34 26 49 l6 29 102 -62 c55 -35 100 -67 98 -72z"
                class="fill-slate-600 dark:fill-navy-200" />
        </g>
    </svg>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/layouts/sidebar-links/management-area.blade.php ENDPATH**/ ?>