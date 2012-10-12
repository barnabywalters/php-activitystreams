<?php
namespace ActivityStreams\ActivityStreams\test;

// Include Parser.php
$autoloader = require_once dirname(__DIR__) . '/../ActivityStreams/ActivityStreams/Collection.php';

use ActivityStreams\ActivityStreams\Collection,
	ActivityStreams\ActivityStreams\Activity,
	ActivityStreams\ActivityStreams\Object,
	ActivityStreams\ActivityStreams\LinkObject,
	PHPUnit_Framework_TestCase,
	DateTime;

class CollectionTest extends PHPUnit_Framework_TestCase
{	
	public function setUp()
	{
		date_default_timezone_set('Europe/London');
	}
	
	/**
	 * 
	 */
	public function testParsePHandlesInnerText()
	{
		
	}
}

// EOF tests/ActivityStreams/CollectionTest.php