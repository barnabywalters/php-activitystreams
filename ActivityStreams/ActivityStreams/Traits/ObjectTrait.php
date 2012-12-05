<?php

namespace ActivityStreams\ActivityStreams\Traits;

use DateTime;

/**
 * ObjectTrait
 * 
 * Satisfies ObjectInterface with setter and getter methods. Does not define
 * properties as visibility, docblocks etc. are up to the developer to define.
 *
 * @author Barnaby Walters
 */
trait ObjectTrait {
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getObjectType() {
        return $this->objectType;
    }
    public function setObjectType($type) {
        return $this->objectType = $type;
    }

    public function getUrl() {
        return $this->url;
    }
    public function setUrl($url) {
        return $this->url = $url;
    }
    
    public function getAttachments() {
        return $this->attachments;
    }

    public function setAttachments(array $attachments) {
        $this->attachments = $attachments;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
    }

    public function getDownstreamDuplicates() {
        return $this->downstreamDuplicates;
    }

    public function setDownstreamDuplicates(array $downstreamDuplicates) {
        $this->downstreamDuplicates = $downstreamDuplicates;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getPublished() {
        return $this->published;
    }

    public function setPublished(DateTime $published) {
        $this->published = $published;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function getUpdated() {
        return $this->updated;
    }

    public function setUpdated(DateTime $updated) {
        $this->updated = $updated;
    }

    public function getUpstreamDuplicates() {
        return $this->upstreamDuplicates;
    }

    public function setUpstreamDuplicates(array $upstreamDuplicates) {
        $this->upstreamDuplicates = $upstreamDuplicates;
    }
}

// EOF
