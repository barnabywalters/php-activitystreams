<?php

namespace ActivityStreams\ActivityStreams\Traits;

use ActivityStreams\ActivityStreams\ObjectInterface;
use DateTime;

/**
 * ActivityTrait
 * 
 * Defines setters and getters which satisfy ActivityInterface. Note that the 
 * properties are not defined here, as visibility and docblocks (for annotation-
 * driven services such as Doctrine) are left up to the implementor.
 *
 * @author barnabywalters
 */
trait ActivityTrait {
    public function getActor() {
        return $this->actor;
    }
    
    public function setActor(ObjectInterface $actor) {
        $this->actor = $actor;
    }
    
    public function getContent() {
        return $this->content;
    }
    
    public function setContent($content) {
        $this->content = $content;
    }
    
    public function getGenerator() {
        return $this->generator;
    }
    
    public function setGenerator(ObjectInterface $generator) {
        $this->generator = $generator;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getObject() {
        return $this->object;
    }
    
    public function setObject(ObjectInterface $object) {
        $this->object = $object;
    }
    
    public function getPublished() {
        return $this->published;
    }
    
    public function setPublished(DateTime $published) {
        $this->published = $published;
    }
    
    public function getProvider() {
        return $this->provider;
    }
    
    public function setProvider(ObjectInterface $provider) {
        $this->provider = $provider;
    }
    

    public function getTarget() {
        return $this->provider;
    }
    
    public function setTarget(ObjectInterface $target) {
        $this->target = $target;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getUpdated() {
        return $this->updated;
    }
    
    public function setUpdated(DateTime $updated) {
        $this->updated = $updated;
    }
    
    public function getUrl() {
        return $this->url;
    }
    
    public function setUrl($url) {
        $this->url = $url;
    }
    
    public function getVerb() {
        return $this->verb;
    }
    
    public function setVerb($verb) {
        $this->verb = $verb;
    }
}

// EOF
