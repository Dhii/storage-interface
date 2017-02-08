<?php

namespace Dhii\Storage\FuncTest\Term;

use Dhii\Storage\Term\OrderTermInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Term\OrderTermInterface}.
 *
 * @since [*next-version*]
 */
class OrderTermInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Term\\OrderTermInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return OrderTermInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getEntityName()
            ->getFieldName()
            ->getOrderMode()
            ->evaluate()
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
