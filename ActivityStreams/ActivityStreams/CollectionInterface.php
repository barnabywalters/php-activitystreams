<?php

namespace ActivityStreams\ActivityStreams;

/**
 * Collection Interface
 * @author barnabywalters
 */
interface CollectionInterface extends \Traversable, \ArrayAccess {
    /**
     * Get Total Items
     * @return int
     */
    public function getTotalItems();
    
    /**
     * Get Items
     * @return array
     */
    public function getItems();
    
    /**
     * Set Items
     * @param array $items
     */
    public function setItems(array $items);
    
    /**
     * Get URL
     * @return string
     */
    public function getUrl();
    
    /**
     * Set URL
     * @param string $url
     */
    public function setUrl($url);
}

// EOF
