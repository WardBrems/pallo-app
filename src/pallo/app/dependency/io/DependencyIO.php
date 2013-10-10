<?php

namespace pallo\app\dependency\io;

/**
 * Interface to get a dependency container
 */
interface DependencyIO {

    /**
     * Gets a dependency container
     * @return pallo\library\dependency\DependencyContainer
     */
    public function getDependencyContainer();

}