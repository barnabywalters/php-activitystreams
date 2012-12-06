<?php

namespace ActivityStreams\ActivityStreams;

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
class Collection {
    /**
     * Items
     * 
     * An array of Activities/Objects. The spec is actually a little unclear 
     * about whether or this can contain Activities or Objects or both or 
     * whether an activity *is* an object, so I am temted to take a lenient 
     * approach at the moment, and say a collection can have *either* 
     * 
     * Activities or Objects **but not both**.
     */
    public $items;

    /**
     * Items After
     * 
     * An instance of {@see \DateTime} representing the earliest date an activity in $item occured
     */
    public $itemsAfter;

    /**
     * Items Before
     * 
     * An instance of {@see \DateTime}  representing the latest date an activity
     * in $item occured
     */
    public $itemsBefore;

    /**
     * Items Per Page
     * 
     * If paged, the maximum number of items which will be contained in $items 
     * per page
     */
    public $itemsPerPage;

    /**
     * Links
     * 
     * A collection of links (object) connecting this page of objects to other 
     * pages of objects considered to be within the same set.
     */
    public $links;

    /**
     * Start Index
     * 
     * The absolute index of the first item in $items relative to the entire 
     * collection, not just the current page.
     */
    public $startIndex;

    /**
     * Total Items
     * 
     * Non-negative number representing the number of objects in $items
     */
    public $totalItems;

    /**
     * URL
     * 
     * The URI/IRI of the current resource.
     */
    public $url;

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
    public function __construct($items = null) {
        if (!empty($items)) {
            $this->items = $items;
            $this->totalItems = count($items);
        }
    }

    /**
     * Order Items
     * 
     * Orders all the objects in $items. By default this is by pubdate (desc), 
     * but it can be configured to use datetime updated or displayname (alpha), 
     * and the order can be set to asc.
     */
    public function orderItems($orderBy = 'published', $direction = 'desc') {
        if (empty($this->items))
            return false;

        $orderedItems = $this->items;

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
            $this->items = $orderedItems;
            return true;
        }
    }

}

/**
 * CollectionLinks
 * 
 * An object full of LinkObjects — the value of the $links property of a 
 * Collection
 * 
 * @todo put this in another file
 */
class CollectionLinks {

    /**
     * First
     * 
     * A LinkObject referencing the first page in this multi-page collection
     * 
     * @see LinkObject
     */
    public $first;

    /**
     * Last
     * 
     * A LinkObject referencing the last page in this multi-page collection
     * 
     * @see LinkObject
     */
    public $last;

    /**
     * Prev
     * 
     * A LinkObject referencing the next page in this multi-page collection
     * 
     * @see LinkObject
     */
    public $prev;

    /**
     * Next
     * 
     * A LinkObject referencing the next page in this multi-page collection
     * 
     * @see LinkObject
     */
    public $next;

    /**
     * Current
     * 
     * A LinkObject referencing most up-to-date page in the collection
     * 
     * @see LinkObject
     */
    public $current;

    /**
     * Self
     * 
     * A LinkObject referencing this page of the multi-page collection
     * 
     * @see LinkObject
     */
    public $self;

}

// EOF