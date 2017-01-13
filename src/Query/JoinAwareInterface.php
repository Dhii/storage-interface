<?php

namespace Dhii\Storage\Query;

use Dhii\Espresso\ExpressionInterface;
use Dhii\Espresso\LogicalExpressionInterface;

/**
 * Something that represents join information.
 *
 * That is, what other data sources to involve in a storage operation, and how they relate.
 *
 * @since [*next-version*]
 */
interface JoinAwareInterface
{
    /**
     * Retrieve the expression that determines what other data sources should be involved in a storage operation.
     *
     * Typically, the expression terms would represent entities.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface The expression that represents entities to join.
     */
    public function getJoinEntities();

    /**
     * Retrieve the expression that determines how joined entities relate to each other.
     *
     * Typically, the expression terms would represent field comparison, or groups of comparisons.
     *
     * @since [*next-version*]
     *
     * @return LogicalExpressionInterface The expression that represents join conditions.
     */
    public function getJoinExpression();
}
