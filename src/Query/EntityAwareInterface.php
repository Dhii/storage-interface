<?php

namespace Dhii\Storage\Query;

use Dhii\Expression\ExpressionInterface;
use Dhii\Expression\LogicalExpressionInterface;

/**
 * Something that provides information about storage entities.
 *
 * That is, what data sources to involve in a storage operation, and how they relate.
 *
 * @since 0.1
 */
interface EntityAwareInterface
{
    /**
     * Retrieve the expression that determines what data sources should be involved in a storage operation.
     *
     * Typically, the expression terms would represent entities.
     *
     * @since 0.1
     *
     * @return ExpressionInterface The expression that represents the entities.
     */
    public function getEntities();

    /**
     * Retrieve the expression that determines how joined entities relate to each other.
     *
     * Typically, the expression terms would represent field comparison, or groups of comparisons.
     *
     * @since 0.1
     *
     * @return LogicalExpressionInterface The expression that represents join conditions.
     */
    public function getJoinExpression();
}
