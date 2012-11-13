<?php

namespace ActivityStreams\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * ActivityEvent
 *
 * @author barnabywalters
 */
class ActivityEvent extends Event {

    /**
     * Object
     * @var ActivityStreams\ActivityStreams\ObjectInterface $object
     */
    protected $object;
    
    /**
     * Verb
     */
    public $verb;
    
    /**
     * Actor
     */
    public $actor;

    /**
     * Constructor
     * 
     * @param ActivityStreams\ActivityStreams\ObjectInterface $object
     */
    public function __construct($verb, $object, $actor = null) {
        $this->verb = $verb;
        $this->object = $object;
        $this->actor = $actor;
    }

    /**
     * Get Object
     * 
     * @return ActivityStreams\ActivityStream\ObjectInterface
     */
    public function getObject() {
        return $this->object;
    }
    
    public function getVerb() {
        return $this->verb;
    }
    
    public function getActor() {
        return $this->actor;
    }
}

// EOF
