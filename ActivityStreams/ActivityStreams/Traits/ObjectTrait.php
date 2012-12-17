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
        if (!$this->offsetExists('attachments'))
            $this['attachments'] = [];
        return $this->appendToKey('attachments', $attachment);
    }
    
    public function addAttachments(array $attachments) {
        if (!$this->offsetExists('attachments'))
            $this['attachments'] = [];
        $this['attachments'] = array_merge($this['attachments'], $attachments);
    }
    
    public function addDownstreamDuplicate($url) {
        if (!$this->offsetExists('downstreamDuplicates'))
            $this['downstreamDuplicates'] = [];
        return $this->appendToKey('downstreamDuplicates', $url);
    }
    
    public function addDownstreamDuplicates(array $urls) {
        if (!$this->offsetExists('downstreamDuplicates'))
            $this['downstreamDuplicates'] = [];
        $this['downstreamDuplicates'] = array_merge($this['downstreamDuplicates'], $urls);
    }
    
    public function addUpstreamDuplicate($url) {
        if (!$this->offsetExists('upstreamDuplicates'))
            $this['upstreamDuplicates'] = [];
        return $this->appendToKey('upstreamDuplicates', $url);
    }
    
    public function addUpstreamDuplicates(array $urls) {
        if (!$this->offsetExists('upstreamDuplicates'))
            $this['upstreamDuplicates'] = [];
        $this['upstreamDuplicates'] = array_merge($this['upstreamDuplicates'], $urls);
    }
}

// EOF
