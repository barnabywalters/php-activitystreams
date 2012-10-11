<?php

/**
 * ActivityStreams
 * 
 * Things in this namespace are to help deal with activites and objects
 */
namespace ActivityStreams\ActivityStreams;

/**
 * Object
 * 
 * An activitystreams object
 */
class Object {
	
	/**
	 * Attachments
	 * 
	 * An array of objects attached to this one
	 */
	public $attachments;
	
	/**
	 * Author
	 * 
	 * The entity who created/authored the object
	 */
	public $objectType;
	
	/**
	 * Content
	 * 
	 * Natural-language description of the object as a string
	 */
	public $content;
	
	/**
	 * Display Name
	 * 
	 * Plain-text human-readable representation of the name of the object
	 */
	public $name;
	
	/**
	 * Downstream Duplicates
	 * 
	 * Array of IRIs of objects which duplicate this object’s content
	 */
	public $downstreamDuplicates;
	
	/**
	 * ID
	 * 
	 * An IRI uniquely representing this object
	 */
	public $id;
	
	/**
	 * Image
	 * 
	 * A URL to an image representing this content
	 */
	public $image;
	
	/**
	 * Object Type
	 * 
	 * The type of the object
	 */
	public $objectType;
	
	/**
	 * Published
	 * 
	 * \DateTime object representing the date and time the object was created
	 */
	public $published;
	
	/**
	 * Summary
	 * 
	 * Natural language string summarizaton of the object’s content
	 */
	public $summary;
	
	/**
	 * Updated
	 * 
	 * \DateTime object representing the date and time an object was last updated
	 */
	public $updated;
	
	/**
	 * Upstream Duplicates
	 * 
	 * An array of IRIs representing upstream objects which duplicate this object’s content
	 */
	public $upstreamDuplicates;
	
	/**
	 * URL
	 * 
	 * An IRI identifying a resource providing a representation of this object
	 */
	public $url;
}

// EOF