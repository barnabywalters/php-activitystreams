<?php

namespace ActivityStreams\ActivityStreams;

/**
 * Object Interface
 * 
 * Allows PHP objects representing ActivityStreams objects to be accessed in a 
 * uniform manner.
 * 
 * This is by no means an extensive implementation of the ActivityStreams 
 * schema, which I don’t actually like very much. This interface is purely to
 * allow plugins to handle objects from multiple modules.
 * 
 * @author barnabywalters
 */
interface ObjectInterface {
    
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
    
    /**
     * Get URL
     * 
     * An IRI [RFC3987] identifying a resource providing an HTML representation 
     * of the object. An object MAY contain a url property
     * 
     * @return string
     */
    public function getUrl();
    
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
    public function getType();
    
    /**
     * Get Published
     * 
     * The date and time at which the object was published. An object MAY 
     * contain a published property.
     * 
     * @return \DateTime
     */
    public function getPublished();
    
    /**
     * Get Updated
     * 
     * The date and time at which a previously published object has been 
     * modified. An Object MAY contain an updated property.
     * 
     * @return \DateTime
     */
    public function getUpdated();
}

// EOF
