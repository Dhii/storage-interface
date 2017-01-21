<?php

namespace Dhii\Storage\FuncTest\Operation;

use \Dhii\Storage\Operation\OperationInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Operation\OperationInterface}.
 *
 * @since [*next-version*]
 */
class OperationInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Operation\\OperationInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return OperationInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getType()
            ->getData()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Operation\OperationInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
