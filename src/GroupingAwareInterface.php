<?php

namespace Dhii\Storage;

use Dhii\Espresso\ExpressionInterface;

/**
 * Something that can determine how results are grouped.
 *
 * @since [*next-version*]
 */
interface GroupingAwareInterface
{
    /**
     * An expression, which defines grouping.
     *
     * Typically, the expression's terms would represent fields to group the results by.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface The grouping expression.
     */
    public function getGrouping();
}
