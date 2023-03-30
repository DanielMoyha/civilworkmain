<!-- Sidebar Panel -->
<div class="sidebar-panel">
    <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
        <!-- Sidebar Panel Header -->
        <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
            <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">Roles y Usuarios</p>
            <button @click="$store.global.isSidebarExpanded = false"
                class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Panel Body -->
        <div x-data="{ expandedItem: 'menu-item-3' }" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" x-init="$el._x_simplebar = new SimpleBar($el);">
            <ul class="flex flex-1 flex-col px-4 font-inter">
                <li x-data="accordionItem('menu-item-3')">
                    <a :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                        @click="expanded = !expanded"
                        class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                        href="javascript:void(0);">
                        <span>Usuarios</span>
                        <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul x-collapse x-show="expanded">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-sidebar','data' => ['href' => route('admin.users.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.users.index'))]); ?>Listar Usuarios <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-sidebar','data' => ['href' => route('admin.users.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.users.create'))]); ?>Registrar Usuario <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </ul>
                </li>

                <li x-data="accordionItem('menu-item-4')">
                    <a :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                        @click="expanded = !expanded"
                        class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                        href="javascript:void(0);">
                        <span>Roles y Permisos</span>
                        <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul x-collapse x-show="expanded">
                        <li>
                            <a x-data="navLink" href="<?php echo e(route('admin.roles.index')); ?>"
                                :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                    'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                                class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                <div class="flex items-center space-x-2">
                                    <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                    <span>Listar Roles</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a x-data="navLink" href="<?php echo e(route('admin.roles.create')); ?>"
                                :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                    'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                                class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                <div class="flex items-center space-x-2">
                                    <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                    <span>Agregar Nuevo Rol</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                
            </ul>

            <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>


        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/layouts/sidebar-panel/sp-users.blade.php ENDPATH**/ ?>