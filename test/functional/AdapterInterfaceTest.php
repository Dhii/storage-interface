<?php

namespace Dhii\Storage\FuncTest;

use Dhii\Storage\AdapterInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\AdapterInterface}.
 *
 * @since 0.1
 */
class AdapterInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\AdapterInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return AdapterInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->query()
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
