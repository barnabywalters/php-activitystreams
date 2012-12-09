<?php

namespace ActivityStreams\ActivityStreams;

/**
 * Media Link
 * 
 * Worthy of a concrete subclass it it’s commonly used within ActivityStreams as
 * well as outside.
 */
class MediaLink extends \ArrayAccess {

    /**
     * Constructor
     * 
     * @param string $url The URL to link to {@see Object::url}
     * @param string $title The optional title of the link {@see LinkObject::$title}
     * @todo Perform some sort of validation here
     * @todo Option to auto-title by fetching the page?
     */
    public function __construct($url, $title = null, array $properties = []) {
        parent::__construct($properties);
        $this['url'] = $url;
        $this['title'] = $title;
    }
}

// EOF