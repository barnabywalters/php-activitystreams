<?php

namespace ActivityStreams\ActivityStreams\Traits;

use DateTime;

/**
 * ObjectTrait
 * 
 * Satisfies ObjectInterface’s requirements.
 *
 * @author Barnaby Walters
 */
trait ObjectTrait {
    public function __construct($type, array $params = array()) {
        parent::__construct($params);
        $this->offsetSet('type', $type);
    }
    
    public function addAttachment(ObjectInterface $attachment) {
        return array_push($this['attachments'], $attachment);
    }
    
    public function addAttachments(array $attachments) {
        $this['attachments'] = array_merge($this['attachments'], $attachments);
    }
    
    public function addDownstreamDuplicate($url) {
        return array_push($this['downstreamDuplicates'], $url);
    }
    
    public function addDownstreamDuplicates(array $urls) {
        $this['downstreamDuplicates'] = array_merge($this['downstreamDuplicates'],
                $urls);
    }
    
    public function addUpstreamDuplicate($url) {
        return array_push($this['upstreamDuplicates'], $url);
    }
    public function addUpstreamDuplicates(array $urls) {
        $this['upstreamDuplicates'] = array_merge($this['upstreamDuplicates'],
                $urls);
    }
}

// EOF
