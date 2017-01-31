<?php

namespace Dhii\Storage\Query;

use Dhii\Espresso\ExpressionInterface;

/**
 * Something that can define the order in which results are retrieved.
 *
 * @since [*next-version*]
 */
interface OrderAwareInterface
{
    /**
     * An expression that defines the order.
     *
     * Typically, the expression's terms would represent the fields used for ordering, each indicating
     * if either ascending or descending.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface The ordering expression.
     */
    public function getOrder();
}
