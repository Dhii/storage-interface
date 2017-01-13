<?php

namespace Dhii\Storage\Query;

use Dhii\Espresso\LogicalExpressionInterface;

/**
 * Something that can represent operation conditions.
 *
 * @since [*next-version*]
 */
interface ConditionAwareInterface
{
    /**
     * Retrieves the condition that an operation result must obey.
     *
     * For example, during select operations, this determines the conditions for retrieved data.
     *
     * @since [*next-version*]
     *
     * @return LogicalExpressionInterface|null The expression that determines what results to retrieve from the storage.
     */
    public function getCondition();
}
