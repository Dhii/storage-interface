<?php

namespace Dhii\Storage\Test\Term;

use \Dhii\Storage\Term\EntityFieldInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Term\EntityFieldInterface}.
 *
 * @since [*next-version*]
 */
class EntityFieldInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Storage\\Term\\EntityFieldInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return EntityFieldInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getEntityName()
            ->getFieldName()
            ->evaluate()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Storage\Term\EntityFieldInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}