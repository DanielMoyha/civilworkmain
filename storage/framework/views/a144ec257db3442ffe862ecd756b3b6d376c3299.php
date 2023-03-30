<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('j773nwJ')) {
    $componentId = $_instance->getRenderedChildComponentId('j773nwJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('j773nwJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j773nwJ');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('j773nwJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH /var/www/html/vendor/livewire/livewire/src/Testing/../views/mount-component.blade.php ENDPATH**/ ?>