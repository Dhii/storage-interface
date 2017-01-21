<?php

namespace Dhii\Storage\FuncTest\Query;

use \Dhii\Storage\Query\FieldsAwareInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Query\FieldsAwareInterface}.
 *
 * @since [*next-version*]
 */
class FieldsAwareInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Query\\FieldsAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return FieldsAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getFields()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Query\FieldsAwareInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
