<?php

namespace Dhii\Storage\Test\Operation;

use \Dhii\Storage\Operation\OperationResultInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Operation\OperationResultInterface}.
 *
 * @since [*next-version*]
 */
class OperationResultInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Operation\\OperationResultInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return OperationResultInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getResultSet()
            ->getInsertId()
            ->getErrorMessage()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Operation\OperationResultInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
