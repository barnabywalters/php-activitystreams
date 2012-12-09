<?php

namespace ActivityStreams\ActivityStreams\Traits;

/**
 * ArrayAccessTrait
 *
 * @author barnabywalters
 */
trait ArrayAccessTrait {
    protected $storage;
    
    public function offsetExists($offset) {
        return array_key_exists($offset, $this->storage);
    }
    
    public function offsetGet($offset) {
        return $this->storage[$offset];
    }
    
    public function offsetSet($offset, $value) {
        $this->storage[$offset] = $value;
    }
    
    public function offsetUnset($offset) {
        unset($this->storage[$offset]);
    }
}

// EOF
