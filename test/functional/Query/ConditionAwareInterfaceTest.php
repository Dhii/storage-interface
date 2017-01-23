<?php

namespace Dhii\Storage\FuncTest\Query;

use Dhii\Storage\Query\ConditionAwareInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\ConditionAwareInterface}.
 *
 * @since 0.1
 */
class ConditionAwareInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Storage\Query\\ConditionAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return ConditionAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCondition()
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
