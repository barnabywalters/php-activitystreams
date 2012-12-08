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
    public function __construct($type, array $params = []);
    
    public function addAttachment(ObjectInterface $attachment);
    public function addAttachments(array $attachments);
    
    public function addDownstreamDuplicate($url);
    public function addDownstreamDuplicates(array $urls);
    
    public function addUpstreamDuplicate($url);
    public function addUpstreamDuplicates(array $urls);
}

// EOF
