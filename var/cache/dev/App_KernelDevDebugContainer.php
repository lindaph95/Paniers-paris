<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7IDRPvU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7IDRPvU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7IDRPvU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7IDRPvU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7IDRPvU\App_KernelDevDebugContainer([
    'container.build_hash' => '7IDRPvU',
    'container.build_id' => 'b7311d9e',
    'container.build_time' => 1601716061,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7IDRPvU');