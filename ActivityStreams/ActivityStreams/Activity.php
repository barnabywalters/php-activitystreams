<?php

namespace ActivityStreams\ActivityStreams;

use ArrayObject;

/**
 * Activity
 * 
 * A bland base implementation of ActivityInterface. Useful for testing or 
 * compatibility purposes (i.e. wrapping non-AS data for use with 
 * activitystreams-compatible code).
 * 
 * The most common ActivityStreams “unit”, this represents a discrete action by 
 * an actor on an object, optionally to a target and such other things.
 * 
 * @author Barnaby Walters
 */
class Activity extends ArrayObject implements ActivityInterface {
    
    public function __construct($verb = 'post', ObjectInterface $object = null, ObjectInterface $actor = null, array $properties = []) {
        parent::__construct($properties);
        $this['verb'] = $verb;
        $this['object'] = $object;
        $this['actor'] = $actor;
    }
}

// EOF