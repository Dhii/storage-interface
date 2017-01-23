<?php

namespace Dhii\Storage\FuncTest\Term;

use Dhii\Storage\Term\EntityFieldInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Storage\Term\EntityFieldInterface}.
 *
 * @since 0.1
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
     * @since 0.1
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
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
