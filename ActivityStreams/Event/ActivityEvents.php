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
 * ## Priorities
 * 
 * Few official priorities are specified, but they must be adhered to in order
 * to prevent over-manipulation and other adverse effects.
 * 
 * Typically the official priorities specify 'guarantee states'. A garantee 
 * state is the priority at which the last, fallback processing for an aspect
 * must be carried out. Each particular well-known aspect of content 
 * manipulation (auto-linking, HTML, etc) has it’s own guarantee state.
 * 
 * Essentially, they work like this:
 * 
 * 1. Anything which requires the aspect to be final should subscribe after 
 *    (Lower priority) the guarantee state
 * 1. The **ONE* most generic* plugin for an aspect should be called AT the
 *    guarantee state
 * 1. Plugins which are more specific should subscribe before (higher priority)
 *    the guarantee state.
 * 1. Plugins called AFTER the guarantee state MUST NOT change that aspect of 
 *    content manipulation.
 * 
 * These are best illustrated by an example — auto linking.
 * 
 * Say I’m using a plugin which calls an all-round auto-linking function like
 * Cassis’s `auto_link`. Amongst other things, `auto_link` wraps twitter 
 * at-names in a hyperlink to the twitter profile page for that at-name.
 * 
 * But I’m also using my Contacts module as a plugin which replaces at-names 
 * of people in my contacts list with an h-card containing their full name and a
 * link to their homepage. If auto_link is run before Contacts, I’ll end up with
 * nested hyperlinks.
 * 
 * The solution to this is to use the most generic auto-linking plugin as a 
 * fallback, and call any more specific plugins soon before it. The fallback
 * plugin should subscribe at the relevant Guarantee priority, in this case
 * Guarantee Auto Linked, which is 100.
 * 
 * So:
 * 
 * 1. Any plugin which requires all auto-linking to have happened before it is 
 *    called has a priority less than 100
 * 1. The fallback (most generic) auto-linking plugin (cassis auto_link) is 
 *    called with priority 100
 * 1. The Contacts linking module is called with priority greater than 100
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
     * 100 Guarantee Auto Linked
     * 0 Guarantee HTML
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
     * 0 Guarantee Syndicated (downstreamDuplicates final)
     * 
     * @todo figure priorities out
     */
    const POST_POST = 'activitystreams.post.post';
}

// EOF