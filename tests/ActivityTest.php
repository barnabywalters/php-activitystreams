<?php

namespace ActivityStreams\Test\ActivityStreams;

use ActivityStreams\ActivityStreams\Activity;
use ActivityStreams\ActivityStreams\Object;

/**
 * ActivityTest
 *
 * @author barnabywalters
 */
class ActivityTest extends \PHPUnit_Framework_TestCase {
    public function testConstructWithVerbAndObject() {
        $activity = new Activity('update', new Object('note', ['content' => 'Blah']));
        $this->assertEquals('update', $activity['verb']);
        $this->assertEquals('Blah', $activity['object']['content']);
    }
}

// EOF
