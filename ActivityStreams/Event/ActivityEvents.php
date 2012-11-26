<?php

namespace ActivityStreams\Event;

/**
 * ActivityEvents
 *
 * This class defines the events under the activitystreams namespace, as well as
 * documents the various priorities at which different listeners should listen
 * based on what task they perform.
 * 
 * Most activitystreams events take the form `activitystreams.VERB.pre|post` 
 * where:
 * 
 * * `VERB` is the lowercase form of the verb this event represents, e.g. 'post'
 * * `pre|post` is either `pre` or `post`. `pre` events are dispatched before
 *   the object is comitted to persistant storage (i.e. it has no URL), `post` 
 *   is dispatched after the object has a URL.
 * 
 * @author Barnaby Walters
 */
final class ActivityEvents {
    /**
     * Before post
     * 
     * `activitystreams.post.pre` is dispatched after an object has been authored
     * by the user but before it has been posted (i.e. comitted to persistant 
     * storage). It is **NOT** guarenteed to have a URL or an ID yet.
     * 
     * Listen for this event if:
     * 
     * * You’re performing content transformation
     * 
     * **DON’T** listen for this event if:
     * 
     * * You require a URL or an ID
     * 
     * ## Priorities
     * 
     * @todo figure priorities out
     */
    const POST_PRE = 'activitystreams.post.pre';
    
    /**
     * After post
     * 
     * `activitystreams.post.post` is dispatched after an object has been posted,
     * i.e. comitted to persistant storage. Objects at this point are guaranteed
     * to have both an ID and a URL.
     * 
     * If you make changes to an object during a post.post event, they WILL be
     * saved (for example, adding a `downstreamDuplicate` after syndication).
     * 
     * Listen for this event if:
     * 
     * * You’re syndicating content
     * * You’re performing content transformation which requires an ID or URL
     * 
     * If you’re just performing content transformation which doesn’t require a
     * URL, listen to `activitystreams.post.pre` instead to save the content 
     * being unnecessarily saved twice.
     * 
     * ## Priorities
     * 
     * @todo figure priorities out
     */
    const POST_POST = 'activitystreams.post.post';
}
