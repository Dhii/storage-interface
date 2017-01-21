<?php

namespace Dhii\Storage\FuncTest\Query;

use \Dhii\Storage\Query\GroupingAwareInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\GroupingAwareInterface}.
 *
 * @since [*next-version*]
 */
class GroupingAwareInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Query\\GroupingAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return GroupingAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getGrouping()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
