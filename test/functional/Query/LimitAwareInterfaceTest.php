<?php

namespace Dhii\Storage\FuncTest\Query;

use \Dhii\Storage\Query\LimitAwareInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\LimitAwareInterface}.
 *
 * @since [*next-version*]
 */
class LimitAwareInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Query\\LimitAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return LimitAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getMaxRows()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Query\LimitAwareInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
