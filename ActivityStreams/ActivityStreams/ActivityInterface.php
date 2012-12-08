<?php

namespace ActivityStreams\ActivityStreams;

/**
 * Activity Interface
 * 
 * Note that as the base Activity has no array properties, no interface methods
 * over the ones in `ArrayAccess` and a constructor.
 * 
 * @author Barnaby Walters
 */
interface ActivityInterface extends \ArrayAccess {
    public function __construct($verb = 'post', ObjectInterface $object = null, ObjectInterface $actor = null, array $properties = []);
}
