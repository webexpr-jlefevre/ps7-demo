<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL3egcr7\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL3egcr7/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerL3egcr7.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerL3egcr7\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerL3egcr7\appProdProjectContainer([
    'container.build_hash' => 'L3egcr7',
    'container.build_id' => 'cd8458f4',
    'container.build_time' => 1620804472,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL3egcr7');