<?php

/**
 * ActivityStreams
 * 
 * Things in this namespace are to help deal with activites and objects
 * 
 * @author Barnaby Walters http://waterpigs.co.uk <barnaby@waterpigs.co.uk>
 */
namespace ActivityStreams\ActivityStreams;

/**
 * Link Object
 * 
 * An activitystreams object representing a link
 * 
 * Worthy of a concrete subclass it it’s commonly used within ActivityStreams as well as outside.
 */
class LinkObject extends Object {
	
	/**
	 * HrefLang
	 * 
	 * Should be an RFC4646 language tag giving a hint as to the language of the linked resource
	 * 
	 * RFC4646 language tags are made of hyphen-separated subtags, for example "en-GB".
	 * 
	 * @see http://www.w3.org/International/articles/language-tags/
	 */
	public $hrefLang;
	
	/**
	 * Title
	 * 
	 * Human-readable plaintext (no HTML) title for the webpage. Typically the value of the
	 * pages <title> tag if HTML
	 */
	public $title;
	
	/**
	 * Type
	 * 
	 * The MIME type of the linked resource.
	 */
	public $type;
	
	/**
	 * Constructor
	 * 
	 * @param string $url The URL to link to {@see Object::url}
	 * @param string $title The optional title of the link {@see LinkObject::$title}
	 * @todo Perform some sort of validation here
	 * @todo Option to auto-title by fetching the page?
	 */
	public function __construct($url, $title=null)
	{
		$this -> url = $url;
		$this -> title = $title;
	}
}

// EOF