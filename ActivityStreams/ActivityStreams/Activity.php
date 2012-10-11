<?php
/**
 * ActivityStreams
 * 
 * Things in this namespace are to help deal with activites and objects
 * @todo put this in it’s own package
 */
namespace ActivityStreams\ActivityStreams;
	
/**
 * Activity
 * 
 * The most common ActivityStreams “unit”, this represents a discrete action by an actor on an object,
 * optionally to a target and such other things
 */
class Activity {
	/**
	 * Actor
	 * 
	 * A representation of the person/entity which carried out the action.
	 * 
	 * Should be an instance of ActivityStreams\Object
	 */
	public $actor;
	
	/**
	 * Content
	 * 
	 * Natural-language description of the activity encoded as a single string
	 */
	public $content;
	
	/**
	 * Generator
	 * 
	 * Describes the application that generated the activity.
	 */
	public $generator;
	
	/**
	 * Icon
	 * 
	 * Description of a resource providing a visual representation of the object, intended for human consumption.
	 * The image SHOULD have an aspect ratio of one (horizontal) to one (vertical) and SHOULD be suitable for 
	 * presentation at a small size. An activity MAY have an icon property.
	 */
	public $icon;
	
	/**
	 * ID
	 * 
	 * Provides a permanent, universally unique identifier for the activity in the form of an absolute IRI.
	 */
	public $id;
	
	/**
	 * Object
	 * 
	 * Describes the primary object of the activity. Instance of ActivityStreams\Object
	 */
	public $object;
	
	/**
	 * Published
	 * 
	 * The date and time at which the activity was published. An activity MUST contain a published property.
	 */
	public $published;
	
	/**
	 * Provider
	 * 
	 * Describes the application that published the activity. Note that this is not necessarily the same entity that generated the activity. An activity MAY contain a provider property.
	 */
	public $provider;
	
	/**
	 * Target
	 * 
	 * Describes the target of the activity. The precise meaning of the activity's target is dependent on the activities verb, but will often be the object the English preposition "to".
	 */
	public $target;
	
	/**
	 * Title
	 * 
	 * Natural-language title or headline for the activity encoded as a single string.
	 */
	public $title;
	
	/**
	 * Updated
	 * 
	 * The date and time at which a previously published activity has been modified. An Activity MAY contain an updated property.
	 */
	public $updated;
	
	/**
	 * URL
	 * 
	 * An IRI [RFC3987] identifying a resource providing an HTML representation of the activity
	 */
	public $url;
	
	/**
	 * Verb
	 * 
	 * Identifies the action that the activity describes. An activity SHOULD contain a verb property whose value is a JSON String that is non-empty and matches either the "isegment-nz-nc" or the "IRI" production in [RFC3339]. Note that the use of a relative reference other than a simple name is not allowed. If the verb is not specified, or if the value is null, the verb is assumed to be "post".
	 */
	public $verb;
}



// EOF