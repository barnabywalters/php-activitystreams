<?php

/**
 * ActivityStreams
 * 
 * Things in this namespace are to help deal with activites and objects
 */
namespace ActivityStreams\ActivityStreams;
	
/**
 * Collection
 * 
 * Container class for Activity objects/Objects, representing a collection/stream/feed of objects.
 * 
 * The minimum required properties are one of either $items or $url. Typically $url would be used
 * in cases where it’s not appropriate to load the entire contents of the collection (e.g.
 * embedded collections). The spec says $url should be to a JSON file, IMO this is not webby. It
 * should be the URL of the resource, and it should respond intelligently to content negotiation.
 */
class Collection {
	/**
	 * Items
	 * 
	 * An array of Activities/Objects
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
	 * An instance of {@see \DateTime}  representing the latest date an activity in $item occured
	 */
	public $itemsBefore;
	
	/**
	 * Items Per Page
	 * 
	 * If paged, the maximum number of items which will be contained in $items per page
	 */
	public $itemsPerPage;
	
	/**
	 * Links
	 * 
	 * A collection of links (object) connecting this page of objects to other pages of objects considered to be
	 * within the same set.
	 */
	public $links;
	
	/**
	 * Start Index
	 * 
	 * The absolute index of the first item in $items relative to the entire collection, not just the 
	 * current page.
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
}



// EOF