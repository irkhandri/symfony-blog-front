<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3SurGHZ\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3SurGHZ/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container3SurGHZ.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container3SurGHZ\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container3SurGHZ\App_KernelProdContainer([
    'container.build_hash' => '3SurGHZ',
    'container.build_id' => '0931f846',
    'container.build_time' => 1715679966,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container3SurGHZ');
