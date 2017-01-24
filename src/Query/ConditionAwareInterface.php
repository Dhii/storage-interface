<?php

namespace Dhii\Storage\Query;

use Dhii\Expression\LogicalExpressionInterface;

/**
 * Something that can represent operation conditions.
 *
 * @since 0.1
 */
interface ConditionAwareInterface
{
    /**
     * Retrieves the condition that an operation result must obey.
     *
     * For example, during select operations, this determines the conditions for retrieved data.
     *
     * @since 0.1
     *
     * @return LogicalExpressionInterface|null The expression that determines what results to retrieve from the storage.
     */
    public function getCondition();
}
