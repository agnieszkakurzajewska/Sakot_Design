<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL4xtbwp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL4xtbwp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerL4xtbwp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerL4xtbwp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerL4xtbwp\appDevDebugProjectContainer([
    'container.build_hash' => 'L4xtbwp',
    'container.build_id' => '4df2d00c',
    'container.build_time' => 1627424641,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL4xtbwp');