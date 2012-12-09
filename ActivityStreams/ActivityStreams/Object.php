<?php

namespace ActivityStreams\ActivityStreams;

use ActivityStreams\ActivityStreams\Traits\ObjectTrait;
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
    use ObjectTrait;
    
    public function __construct($type, array $params = []) {
        parent::__construct($params);
        $this->offsetSet('objectType', $type);
    }
    
    public function jsonSerialize() {
        return $this->storage;
    }
}

// EOF