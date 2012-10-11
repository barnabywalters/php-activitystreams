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
}



// EOF