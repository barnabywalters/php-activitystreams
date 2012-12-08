<?php

namespace ActivityStreams\ActivityStreams;

use ArrayObject;

/**
 * Object
 * 
 * Bland, basic implementation of ObjectInterface. Useful
 * for testing or compatibility purposes.
 * 
 * @author Barnaby Walters
 */
class Object extends ArrayObject implements ObjectInterface, \JsonSerializable {
    use Traits\ObjectTrait;
    
    public function jsonSerialize() {
        return $this->storage;
    }
}

// EOF