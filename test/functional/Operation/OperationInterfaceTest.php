<?php

namespace Dhii\Storage\FuncTest\Operation;

use Dhii\Storage\Operation\OperationInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Operation\OperationInterface}.
 *
 * @since 0.1
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
     * @since 0.1
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
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
