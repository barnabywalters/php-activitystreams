<?php

namespace ActivityStreams\ActivityStreams\Traits;

use ActivityStreams\ActivityStreams\ObjectInterface;

/**
 * ObjectTrait
 * 
 * Satisfies ObjectInterface’s requirements.
 *
 * @author Barnaby Walters
 */
trait ObjectTrait {
    private function appendToKey($key, $value) {
        $array = $this->offsetGet($key);
        $array[] = $value;
        $this->offsetSet($key, $array);
    }
    
    public function addAttachment(ObjectInterface $attachment) {
        if (!array_key_exists('attachments', $this))
            $this['attachments'] = [];
        return $this->appendToKey('attachments', $attachment);
    }
    
    public function addAttachments(array $attachments) {
        if (!array_key_exists('attachments', $this))
            $this['attachments'] = [];
        $this['attachments'] = $this['attachments'] + $attachments;
    }
    
    public function addDownstreamDuplicate($url) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        return $this->appendToKey('downstreamDuplicates', $url);
    }
    
    public function addDownstreamDuplicates(array $urls) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        $this['downstreamDuplicates'] = $this['downstreamDuplicates'] + $urls;
    }
    
    public function addUpstreamDuplicate($url) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        return $this->appendToKey('upstreamDuplicates', $url);
    }
    
    public function addUpstreamDuplicates(array $urls) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        $this['upstreamDuplicates'] = $this['upstreamDuplicates'] + $urls;
    }
}

// EOF
