<?php

namespace ActivityStreams\Event;

use ActivityStreams\ActivityStreams\ActivityInterface;
use ActivityStreams\ActivityStreams\Traits\ArrayAccessTrait;
use Symfony\Component\EventDispatcher\Event;

/**
 * ActivityEvent
 * 
 * Represents an activity as it happens in software within the Symfony Event 
 * Dispatcher component.
 * 
 * @author Barnaby Walters
 */
class ActivityEvent extends Event implements ActivityInterface {
    use ArrayAccessTrait;
    
    /** @var array Array of strings, expressing the end user should be notified of */
    protected $warnings = [];
    
    /**
     * Constructor
     * 
     * @param ActivityStreams\ActivityStreams\ObjectInterface $object
     */
    public function __construct($verb, ObjectInterface $object, ObjectInterface $actor = null, array $parameters = []) {
        $this->storage = $parameters;
        $this['verb'] = $verb;
        $this['object'] = $object;
        $this['actor'] = $actor;
    }
    
    public function addWarning($warning) {
        if (is_string($warning))
            return $this->warnings[] = $warning;
        throw new Exception('Warning must be a string');
    }
}

// EOF
