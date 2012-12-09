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
        return $this['attachments'] = array_push($this['attachments'], $attachment);
    }
    
    public function addAttachments(array $attachments) {
        if (!array_key_exists('attachments', $this))
            $this['attachments'] = [];
        $this['attachments'] = $this['attachments'] + $attachments;
    }
    
    public function addDownstreamDuplicate($url) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        return $this['downstreamDuplicates'] = array_push($this['downstreamDuplicates'], $url);
    }
    
    public function addDownstreamDuplicates(array $urls) {
        if (!array_key_exists('downstreamDuplicates', $this))
            $this['downstreamDuplicates'] = [];
        $this['downstreamDuplicates'] = $this['downstreamDuplicates'] + $urls;
    }
    
    public function addUpstreamDuplicate($url) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        return $this['upstreamDuplicates'] = array_push($this['upstreamDuplicates'], $url);
    }
    
    public function addUpstreamDuplicates(array $urls) {
        if (!array_key_exists('upstreamDuplicates', $this))
            $this['upstreamDuplicates'] = [];
        $this['upstreamDuplicates'] = $this['upstreamDuplicates'] + $urls;
    }
}

// EOF
