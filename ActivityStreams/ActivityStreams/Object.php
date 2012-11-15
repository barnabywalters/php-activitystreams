<?php

/**
 * ActivityStreams
 * 
 * Things in this namespace are to help deal with activites and objects
 * 
 * @author Barnaby Walters http://waterpigs.co.uk <barnaby@waterpigs.co.uk>
 */

namespace ActivityStreams\ActivityStreams;

/**
 * Object
 * 
 * An activitystreams object
 */
class Object {

    /**
     * Attachments
     * 
     * An array of objects attached to this one
     */
    public $attachments;

    /**
     * Author
     * 
     * The entity who created/authored the object
     */
    public $author;

    /**
     * Content
     * 
     * Natural-language description of the object as a string
     */
    public $content;

    /**
     * Display Name
     * 
     * Plain-text human-readable representation of the name of the object
     */
    public $displayName;

    /**
     * Downstream Duplicates
     * 
     * Array of IRIs of objects which duplicate this object’s content
     */
    public $downstreamDuplicates;

    /**
     * ID
     * 
     * An IRI uniquely representing this object
     */
    public $id;

    /**
     * Image
     * 
     * A URL to an image representing this content
     */
    public $image;

    /**
     * Object Type
     * 
     * The type of the object
     */
    public $objectType;

    /**
     * Published
     * 
     * \DateTime object representing the date and time the object was created
     */
    public $published;

    /**
     * Summary
     * 
     * Natural language string summarizaton of the object’s content
     */
    public $summary;

    /**
     * Updated
     * 
     * \DateTime object representing the date and time an object was last updated
     */
    public $updated;

    /**
     * Upstream Duplicates
     * 
     * An array of IRIs representing upstream objects which duplicate this object’s content
     */
    public $upstreamDuplicates;

    /**
     * URL
     * 
     * An IRI identifying a resource providing a representation of this object
     */
    public $url;
    
    public $tags;

    public function getId() {
        return $this->id;
    }

    public function getObjectType() {
        return $this->objectType;
    }

    public function getUrl() {
        return $this->url;
    }
    
    public function getAttachments() {
        return $this->attachments;
    }

    public function setAttachments($attachments) {
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

    public function setDownstreamDuplicates($downstreamDuplicates) {
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

    public function setPublished($published) {
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

    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    public function getUpstreamDuplicates() {
        return $this->upstreamDuplicates;
    }

    public function setUpstreamDuplicates($upstreamDuplicates) {
        $this->upstreamDuplicates = $upstreamDuplicates;
    }

    public function getTags() {
        return $this->tags;
    }
    
    public function setTags($tags) {
        return $this->tags = $tags;
    }
}

// EOF