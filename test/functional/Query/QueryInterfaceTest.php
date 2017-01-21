<?php

namespace Dhii\Storage\FuncTest\Query;

use \Dhii\Storage\Query\QueryInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\QueryInterface}.
 *
 * @since [*next-version*]
 */
class QueryInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Query\\QueryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return QueryInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getEntities()
            ->getJoinExpression()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Query\QueryInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('Dhii\\Storage\\Query\\EntityAwareInterface', $subject);
    }

}
