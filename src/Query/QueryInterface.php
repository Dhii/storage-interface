<?php

namespace Dhii\Storage\Query;

/**
 * Represents the specifics of the query.
 *
 * Specifically:
 * - Any conditions of the query;
 * - Conditions that directly determine what data to return.
 * - Ordering, limiting, and grouping instructions.
 * - Post-retrieval filtering.
 * - Instructions for involving data from other sources.
 *
 * @since [*next-version*]
 */
interface QueryInterface extends
    ConditionAwareInterface,
    FieldsAwareInterface,
    GroupingAwareInterface,
    LimitAwareInterface
{
}
