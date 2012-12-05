<?php

namespace ActivityStreams\Event;

use ActivityStreams\ActivityStreams\ActivityInterface;
use ActivityStreams\ActivityStreams\Traits\ActivityTrait;
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
    use ActivityTrait;
    
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
}

// EOF
