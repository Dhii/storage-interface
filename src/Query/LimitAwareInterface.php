<?php

namespace Dhii\Storage\Query;

/**
 * Represents something that is aware of how storage operations should be limited to a number of affected rows.
 *
 * @since 0.1
 */
interface LimitAwareInterface
{
    /**
     * Retrieves the maximal number of rows that should be invovled in the forming of the storage operation result.
     *
     * @since 0.1
     *
     * @return int|null The maximal number of rows. Null represents an unlimited amount.
     */
    public function getMaxRows();
}
