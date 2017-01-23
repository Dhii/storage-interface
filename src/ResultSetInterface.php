<?php

namespace Dhii\Storage;

use ArrayAccess;

/**
 * Represents a set of rows that result from a storage operation.
 *
 * @since 0.1
 */
interface ResultSetInterface extends \Countable, \Iterator
{
    /**
     * Retrieves the current row.
     *
     * @since 0.1
     * 
     * @return array|ArrayAccess The current row of the result set.
     */
    public function current();
}
