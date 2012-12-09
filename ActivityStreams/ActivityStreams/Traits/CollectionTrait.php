<?php

namespace ActivityStreams\ActivityStreams\Traits;

use ActivityStreams\ActivityStreams\ActivityInterface;
use ActivityStreams\ActivityStreams\ObjectInterface;

/**
 * CollectionTrait
 * 
 * Implements setters/getters to satisfy CollectionInterface. Does not define
 * properties, as visibility and docblocks are left up to the developer.
 *
 * @author Barnaby Walters
 */
trait CollectionTrait {
    public function offsetGet($index) {
        if ($index == 'totalItems')
            return count($this->offsetGet ('items'));
        
        return parent::offsetGet($index);
    }
    
    public function addItem($item) {
        if (!$item instanceof ObjectInterface
        and !$item instanceof ActivityInterface)
            throw new \InvalidArgumentException('addItem() only accepts instances of ObjectInterface or ActivityInterface');
        
        $this['items'][] = $item;
    }
    
    /**
     * @todo make this check instanceof *Interface
     */
    public function addItems(array $items) {
        array_push($this['items'], $items);
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
                    } else if (is_a($a[$orderBy], '\DateTime')) {
                        // 1 if $a before $b, -1 vice versa
                        $diff = ($a[$orderBy] > $b[$orderBy]) ? 1 : -1;
                    } else if (is_string($a[$orderBy])) {
                        $diff = strcmp($a[$orderBy], $b[$orderBy]);
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
