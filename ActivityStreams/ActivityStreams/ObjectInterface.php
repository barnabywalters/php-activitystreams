<?php

namespace ActivityStreams\ActivityStreams;

use DateTime;

/**
 * Object Interface
 * 
 * Allows PHP objects representing ActivityStreams objects to be accessed in a 
 * uniform manner.
 * 
 * @author Barnaby Walters
 */
interface ObjectInterface {
    
    public function getAttachments();
    public function setAttachments(array $attachments);
    
    public function getAuthor();
    public function setAuthor($author);
    
    /**
     * Get Content
     * 
     * Natural-language description of the object encoded as a single JSON 
     * String containing HTML markup. Visual elements such as thumbnail images 
     * MAY be included. An object MAY contain a content property.
     * 
     * @return string
     */
    public function getContent();
    public function setContent($content);
    
    /**
     * Get Display Name
     * 
     * A natural-language, human-readable and plain-text name for the object. 
     * HTML markup MUST NOT be included. An object MAY contain a displayName 
     * property. If the object does not specify an objectType property, the 
     * object SHOULD specify a displayName.
     * 
     * @return string
     */
    public function getDisplayName();
    public function setDisplayName($displayName);
    
    public function getDownstreamDuplicates();
    public function setDownstreamDuplicates(array $downstreamDuplicates);
    
    public function getId();
    public function setId($id);
    
    public function getImage();
    public function setImage($param);
    
    /**
     * Get Type
     * 
     * Identifies the type of object. An object MAY contain an objectType 
     * property whose value is a JSON String that is non-empty and matches 
     * either the "isegment-nz-nc" or the "IRI" production in [RFC3987]. Note 
     * that the use of a relative reference other than a simple name is not 
     * allowed. If no objectType property is contained, the object has no 
     * specific type.
     * 
     * @return string The activitystreams type of the object
     */
    public function getObjectType();
    public function setObjectType($type);
    
    /**
     * Get Published
     * 
     * The date and time at which the object was published. An object MAY 
     * contain a published property.
     * 
     * @return \DateTime
     */
    public function getPublished();
    public function setPublished(DateTime $published);
    
    public function getSummary();
    public function setSummary($summary);
    
    /**
     * Get Updated
     * 
     * The date and time at which a previously published object has been 
     * modified. An Object MAY contain an updated property.
     * 
     * @return \DateTime
     */
    public function getUpdated();
    public function setUpdated(DateTime $updated);
    
    public function getUpstreamDuplicates();
    public function setUpstreamDuplicates(array $upstreamDuplicates);
    
    /**
     * Get URL
     * 
     * An IRI [RFC3987] identifying a resource providing an HTML representation 
     * of the object. An object MAY contain a url property.
     * 
     * @return string
     */
    public function getUrl();
    public function setUrl($url);
}

// EOF
