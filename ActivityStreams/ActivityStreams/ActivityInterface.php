<?php

namespace ActivityStreams\ActivityStreams;

use DateTime;

/**
 * Activity Interface
 * @author Barnaby Walters
 */
interface ActivityInterface {
    
    /**
     * Get Actor
     * @return ObjectInterface
     */
    public function getActor();
    
    /**
     * Set Actor
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $actor
     */
    public function setActor(ObjectInterface $actor);
    
    /**
     * Get Content
     * @return string
     */
    public function getContent();
    
    /**
     * Set Content
     * @param string $content
     */
    public function setContent($content);
    
    /**
     * Get Generator
     * @return ObjectInterface
     */
    public function getGenerator();
    
    /**
     * Set Generator
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $generator
     */
    public function setGenerator(ObjectInterface $generator);
    
    /**
     * Get Icon
     * @return string URL of the icon
     * @todo be spec-compliant here and return some Media Link object?
     */
    public function getIcon();
    
    /**
     * Set Icon
     * @param string $icon
     */
    public function setIcon($icon);
    
    /**
     * Get Id
     * @return string
     */
    public function getId();
    
    /**
     * Set Id
     * @param string $id
     */
    public function setId($id);
    
    /**
     * Get Object
     * @return ObjectInterface
     */
    public function getObject();
    
    /**
     * Set Object
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $object
     */
    public function setObject(ObjectInterface $object);
    
    /**
     * Get Published
     * @return DateTime
     */
    public function getPublished();
    
    /**
     * Set Published
     * @param DateTime $published
     */
    public function setPublished(DateTime $published);
    
    /**
     * Get Provider
     * @return ObjectInterface
     */
    public function getProvider();
    
    /**
     * Set Provider
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $provider
     */
    public function setProvider(ObjectInterface $provider);
    
    /**
     * Get Target
     * @return ObjectInterface
     */
    public function getTarget();
    
    /**
     * Set Target
     * @param \ActivityStreams\ActivityStreams\ObjectInterface $target
     */
    public function setTarget(ObjectInterface $target);
    
    /**
     * Get Title
     * @return string
     */
    public function getTitle();
    
    /**
     * Set Title
     * @param string $title
     */
    public function setTitle($title);
    
    /**
     * Get Updated
     * @return DateTime
     */
    public function getUpdated();
    
    /**
     * Set Updated
     * @param DateTime $updated
     */
    public function setUpdated(DateTime $updated);
    
    /**
     * Get URL
     * @return string
     */
    public function getUrl();
    
    /**
     * Set URL
     * @param string $url
     */
    public function setUrl($url);
    
    /**
     * Get Verb
     * @return string
     */
    public function getVerb();
    
    /**
     * Set Verb
     * @param string $verb
     */
    public function setVerb($verb);
}
