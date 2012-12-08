<?php

namespace ActivityStreams\ActivityStreams;

use ArrayAccess;
use DateTime;

/**
 * Object Interface
 * 
 * Allows PHP objects representing ActivityStreams objects to be accessed in a 
 * uniform manner.
 * 
 * @author Barnaby Walters
 */
interface ObjectInterface extends ArrayAccess {
    /**
     * Constructor
     * @param string $type
     * @param array $params An assoc. array of properties to set
     */
    public function __construct($type, array $params = []);
    
    /**
     * Add Attachment
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $attachment
     */
    public function addAttachment(ObjectInterface $attachment);
    
    /**
     * Add Multiple Attachments
     * @param array $attachments
     */
    public function addAttachments(array $attachments);
    
    /**
     * Add Downstream Duplicate
     * @param string $url
     */
    public function addDownstreamDuplicate($url);
    
    /**
     * Add Multiple Downstream Duplicates
     * @param array $urls
     */
    public function addDownstreamDuplicates(array $urls);
    
    /**
     * Add Upstream Duplicate
     * @param string $url
     */
    public function addUpstreamDuplicate($url);
    
    /**
     * Add Multiple Downstream Duplicates
     * @param array $urls
     */
    public function addUpstreamDuplicates(array $urls);
}

// EOF
