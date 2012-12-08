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
class Object extends ArrayObject implements ObjectInterface {
    public function __construct($type, array $params = array()) {
        parent::__construct($params);
        $this->offsetSet('type', $type);
    }
    
    public function jsonSerialize() {
        return $this->storage;
    }
}

// EOF