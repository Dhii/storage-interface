<?php

namespace Dhii\Storage\Query;

use Dhii\Espresso\ExpressionInterface;
use Dhii\Espresso\LogicalExpressionInterface;

/**
 * Something that provides information about storage entities.
 *
 * That is, what data sources to involve in a storage operation, and how they relate.
 *
 * @since [*next-version*]
 */
interface EntityAwareInterface
{
    /**
     * Retrieve the expression that determines what data sources should be involved in a storage operation.
     *
     * Typically, the expression terms would represent entities.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface The expression that represents the entities.
     */
    public function getEntities();

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
