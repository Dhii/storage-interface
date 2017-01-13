<?php

namespace Dhii\Storage\Query;

use Dhii\Espresso\ExpressionInterface;

/**
 * Something that can determine how operation results are formed.
 *
 * @since [*next-version*]
 */
interface FieldsAwareInterface
{
    /**
     * Retrieves the expression that defines what data fields are involved in the operation results.
     *
     * For example, during read operations, this determines what fields to retrieve.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface The fields expression.
     *                             Typically, the terms of this expression would represent fields or aliases
     *                             that should be involved in forming the operation results.
     */
    public function getFields();
}
