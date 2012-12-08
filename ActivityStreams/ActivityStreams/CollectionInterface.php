<?php

namespace ActivityStreams\ActivityStreams;

/**
 * Collection Interface
 * @author barnabywalters
 */
interface CollectionInterface extends \Traversable, \ArrayAccess {
    
    /**
     * Add Item
     * @param ActivityInterface|ObjectInterface $item
     */
    public function addItem($item);
    
    /**
     * Add Multiple Items
     * @param array $item
     */
    public function addItems(array $item);
}

// EOF
