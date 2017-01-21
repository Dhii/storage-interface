<?php

namespace Dhii\Storage\FuncTest;

use Dhii\Storage\ResultSetInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\ResultSetInterface}.
 *
 * @since [*next-version*]
 */
class ResultSetInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\ResultSetInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ResultSetInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->count()
            ->current()
            ->next()
            ->key()
            ->valid()
            ->rewind()
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
