<?php

namespace ActivityStreams\Test\ActivityStreams;

use ActivityStreams\ActivityStreams\Collection,
    ActivityStreams\ActivityStreams\Activity,
    ActivityStreams\ActivityStreams\Object,
    ActivityStreams\ActivityStreams\LinkObject,
    PHPUnit_Framework_TestCase,
    DateTime;

class CollectionTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        date_default_timezone_set('Europe/London');
    }

    /**
     * @group unit
     */
    public function testEmptyConstructCreatesEmptyCollection() {
        $collection = new Collection();
        $this->assertEquals(0, $collection->totalItems);
    }

    /**
     * @group unit
     */
    public function testConstructingWithItemsAddsItems() {
        $collection = new Collection();

        $a = array();

        for ($i = 0; $i < 10; $i++) {
            $a[$i] = new Activity();
        }

        $collection = new Collection($a);

        $this->assertEquals(10, $collection->totalItems);
    }

    /**
     * @group unit
     */
    public function testOrderingItemsByDatePublishedWorks() {
        $collection = new Collection();

        $a = array();

        for ($i = 0; $i < 9; $i++) {
            $a[$i] = new Activity();
            $a[$i]->published = DateTime::createFromFormat('Y-m-d', '2012-11-0' . $i);
            $a[$i]->displayName = 'Activity number ' . $i;
        }

        // Create a shuffled version of the array
        $as = $a;
        shuffle($as);

        // Assert shuffled
        $this->assertNotSame($as, $a, 'Failed asserting that the array has been shuffled correctly');
        $collection = new Collection($as);
        $this->assertNotSame($a, $collection->items);
        $collection->orderItems();
        $this->assertSame($a, $collection->items);
    }

    /**
     * @group unit
     */
    public function testOrderingItemsByDatePublishedDescWorks() {
        $collection = new Collection();

        $a = array();

        for ($i = 0; $i < 9; $i++) {
            $a[$i] = new Activity();
            $a[$i]->published = DateTime::createFromFormat('Y-m-d', '2012-11-0' . $i);
            $a[$i]->displayName = 'Activity number ' . $i;
        }

        // Create a shuffled version of the array
        $as = $a;
        shuffle($as);

        // Assert shuffled
        $this->assertNotSame($as, $a, 'Failed asserting that the array has been shuffled correctly');
        $collection = new Collection($as);
        $this->assertNotSame($a, $collection->items);
        $collection->orderItems('published', 'asc');
        $this->assertSame(array_reverse($a), $collection->items);
    }

    /**
     * @group unit
     */
    public function testOrderingItemsByDisplayNameWorks() {
        $alphabet = 'abcdefghijklmnop';
        $collection = new Collection();

        $a = array();

        for ($i = 0; $i < 9; $i++) {
            $a[$i] = new Activity();
            $a[$i]->displayName = $alphabet[$i];
        }

        // Create a shuffled version of the array
        $as = $a;
        shuffle($as);

        // Assert shuffled
        $this->assertNotSame($as, $a, 'Failed asserting that the array has been shuffled correctly');
        $collection = new Collection($as);
        $this->assertNotSame($a, $collection->items);
        $collection->orderItems('displayName');
        $this->assertSame($a, $collection->items);
    }

}

// EOF tests/ActivityStreams/CollectionTest.php