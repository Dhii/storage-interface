<?php

namespace Dhii\Storage\FuncTest\Query;

use Dhii\Storage\Query\EntityAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\EntityAwareInterface}.
 *
 * @since 0.1
 */
class EntityAwareInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Query\\EntityAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return EntityAwareInterface
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
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
