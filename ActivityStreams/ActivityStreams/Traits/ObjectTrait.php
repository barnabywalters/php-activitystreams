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
    public function addAttachment(ObjectInterface $attachment) {
        if (!array_key_exists('attachments', $this))
            $this['attachments'] = [];
        return array_push($this['attachments'], $attachment);
    }
    
    public function addAttachments(array $attachments) {
        if (!array_key_exists('attachments', $this))
            $this['attachments'] = [];
        $this['attachments'] = array_merge($this['attachments'], $attachments);
    }
    
    public function addDownstreamDuplicate($url) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        return array_push($this['downstreamDuplicates'], $url);
    }
    
    public function addDownstreamDuplicates(array $urls) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        $this['downstreamDuplicates'] = array_merge($this['downstreamDuplicates'],
                $urls);
    }
    
    public function addUpstreamDuplicate($url) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        return array_push($this['upstreamDuplicates'], $url);
    }
    
    public function addUpstreamDuplicates(array $urls) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        $this['upstreamDuplicates'] = array_merge($this['upstreamDuplicates'],
                $urls);
    }
}

// EOF
