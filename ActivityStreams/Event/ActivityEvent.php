<?php

namespace ActivityStreams\Event;

use ActivityStreams\ActivityStreams\ObjectInterface;
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
    public function __construct($verb = 'post', ObjectInterface $object = null, ObjectInterface $actor = null, array $properties = []) {
        $this->storage = $properties;
        $this['verb'] = $verb;
        $this['object'] = $object;
        $this['actor'] = $actor;
    }
    
    /**
     * BC for plugins written before using arrayaccess. New plugins should use
     * `$event['object']`, as `getObject()` WILL be deprecated in the future.
     * @return \ActivityStreams\Event\ActivityEvent
     */
    public function getObject() {
        return $this['object'];
    }
    
    /**
     * BC for plugins written before using ArrayAccess. New plugins should use 
     * `$event['object'] = $object`, as `setObject()` WILL be deprecated in the
     * future.
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $object
     */
    public function setObject(ObjectInterface $object) {
        $this['object'] = $object;
    }
    
    public function addWarning($warning) {
        if (is_string($warning))
            return $this->warnings[] = $warning;
        throw new Exception('Warning must be a string');
    }
}

// EOF
