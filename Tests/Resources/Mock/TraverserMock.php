<?php
namespace EMC3\Bundle\Neo4jBundle\Tests\Resources\Mock;

use EMC3\Bundle\ProjectBundle\Tests\Resources\MockInterface;

class TraverserMock implements MockInterface {
	/* (non-PHPdoc)
	 * @see EMC3\Bundle\ProjectBundle\Tests\Resources.MockInterface::getMock()
	 */
	public static function getMock(\PHPUnit_Framework_TestCase $testCase) {
		return $testCase->getMock('Neo4j\Traverser', array(), array(), '', false);
	}
	
}

?>