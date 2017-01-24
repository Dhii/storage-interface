<?php

namespace Dhii\Storage\Query;

use Dhii\Expression\ExpressionInterface;

/**
 * Something that can determine how results are grouped.
 *
 * @since 0.1
 */
interface GroupingAwareInterface
{
    /**
     * An expression, which defines grouping.
     *
     * Typically, the expression's terms would represent fields to group the results by.
     *
     * @since 0.1
     *
     * @return ExpressionInterface The grouping expression.
     */
    public function getGrouping();
}
