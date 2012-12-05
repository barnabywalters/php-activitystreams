<?php

namespace ActivityStreams\ActivityStreams\Traits;

/**
 * CollectionTrait
 *
 * @author barnabywalters
 */
trait CollectionTrait {
    public function getTotalItems() {
        return count($this->items);
    }
    
    public function getItems() {
        return $this->items;
    }

    public function setItems(array $items) {
        $this->items = $items;
    }
    
    public function getUrl() {
        return $this->url;
    }
    
    public function setUrl($url) {
        $this->url = $url;
    }
}

// EOF
