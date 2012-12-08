<?php

namespace ActivityStreams\Test\ActivityStreams;

use ActivityStreams\ActivityStreams\Object;

require __DIR__ . '/../ActivityStreams/ActivityStreams/Object.php';

/**
 * Test suite for Object
 *
 * @author barnabywalters
 */
class ObjectTest extends \PHPUnit_Framework_TestCase {
    public function testObjectCreationWithType() {
        $object = new Object('note');
        $this->assertEquals('note', $object['type']);
    }
    
    public function testObjectCreationWithTypeAndParams() {
        $object = new Object('article', [
            'displayName' => 'The Name',
            'summary' => 'Blah blah blah blah',
            'content' => 'This is the content. It should be quite a bit longer.'
        ]);
        
        $this->assertEquals('The Name', $object['displayName']);
        $this->assertEquals('Blah blah blah blah', $object['summary']);
        $this->assertEquals('This is the content. It should be quite a bit longer.', $object['content']);
    }
    
    public function testAddSingleAttachment() {
        $attachment = new Object('note');
        $object = new Object('article');
        $object->addAttachment($attachment);
        $this->assertContains($attachment, $object['attachments']);
    }
}

// EOF
