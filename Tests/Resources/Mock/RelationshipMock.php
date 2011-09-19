<?php
namespace EMC3\Bundle\Neo4jBundle\Tests\Resources\Mock;

use EMC3\Bundle\ProjectBundle\Tests\Resources\MockInterface;
class RelationshipMock implements MockInterface {
	public static function getMock(\PHPUnit_Framework_TestCase $testCase) {
		return $testCase->getMock('Neo4j\Relationship', array(), array(), '', false);
	}
}

?>