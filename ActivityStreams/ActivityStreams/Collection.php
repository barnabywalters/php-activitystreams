<?php

namespace ActivityStreams\ActivityStreams;

use ArrayObject;

/**
 * Collection
 * 
 * Container class for Activity objects/Objects, representing a collection/
 * stream/feed of objects.
 * 
 * The minimum required properties are one of either $items or $url. Typically 
 * $url would be used in cases where it’s not appropriate to load the entire 
 * contents of the collection (e.g. embedded collections). The spec says $url 
 * should be to a JSON file, IMO this is not webby. It should be the URL of the 
 * resource, and it should respond intelligently to content negotiation.
 */
class Collection extends ArrayObject implements CollectionInterface {
    use Traits\CollectionTrait;
    
    /**
     * Construct
     * 
     * By default the constructor takes an array of items which is applied to 
     * $items. If the collection is a referenced collection simply call 
     * construct with no params and apply $url manually.
     * 
     * By default, if $items is supplied, it is *not* ordered (that should be 
     * done by {@see Collection::orderItems}) but it *is* iterated through and 
     * cleaned up.
     * 
     * @param array $items An array of items to add to the collection
     * @todo Implement cleaning wherever best (in Activity/Object?)
     */
    public function __construct($items = array()) {
        $this->offsetSet('items', $items);
    }
}

// EOF