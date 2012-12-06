<?php

namespace ActivityStreams\ActivityStreams;

use ArrayObject;

/**
 * Activity
 * 
 * A bland base implementation of ActivityInterface, using ActivityTrait. Useful
 * for testing or compatibility purposes (i.e. wrapping non-AS data for use with
 * activitystreams-compatible code).
 * 
 * The most common ActivityStreams “unit”, this represents a discrete action by 
 * an actor on an object, optionally to a target and such other things.
 * 
 * @author Barnaby Walters
 */
class Activity extends ArrayObject {
    public function __construct($verb = 'post', $object = null, $actor = null, array $params = []) {
        parent::__construct($params);
        $this['verb'] = $verb;
        $this['object'] = $object;
        $this['actor'] = $actor;
    }
}

// EOF