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
class Collection extends ArrayObject {
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
    
    public function offsetGet($index) {
        if ($index == 'totalItems')
            return count($this->offsetGet ('items'));
        
        return parent::offsetGet($index);
    }

    /**
     * Order Items
     * 
     * Orders all the objects in $items. By default this is by pubdate (desc), 
     * but it can be configured to use datetime updated or displayname (alpha), 
     * and the order can be set to asc.
     */
    public function orderItems($orderBy = 'published', $direction = 'desc') {
        if (empty($this['items']))
            return false;

        $orderedItems = $this['items'];

        $result = usort($orderedItems, function ($a, $b) use ($orderBy, $direction) {
                    if ($a === $b) {
                        $diff = 0;
                    } else if (is_a($a->{$orderBy}, '\DateTime')) {
                        // 1 if $a before $b, -1 vice versa
                        $diff = ($a->{$orderBy} > $b->{$orderBy}) ? 1 : -1;
                    } else if (is_string($a->{$orderBy})) {
                        $diff = strcmp($a->{$orderBy}, $b->{$orderBy});
                    } else {
                        // Uncomparable, so return 0
                        $diff = 0;
                    }

                    // Compensate for direction
                    if ($direction == 'asc')
                        $diff = $diff * -1;

                    return $diff;
                });

        if ($result == false) {
            // Failed for some reason! Return false
            return false;
        } else {
            // Worked
            $this['items'] = $orderedItems;
            return true;
        }
    }

}

// EOF