<?php

namespace Dhii\Storage\FuncTest\Operation;

use \Dhii\Storage\Operation\ResultInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Operation\ResultInterface}.
 *
 * @since [*next-version*]
 */
class ResultInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Operation\\ResultInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ResultInterface
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
     * @covers \Dhii\Storage\Operation\ResultInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
