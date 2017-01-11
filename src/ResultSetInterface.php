<?php

namespace Dhii\Storage;

use ArrayAccess;

/**
 * Represents a set of rows that result from a storage operation.
 *
 * @since [*next-version*]
 */
interface ResultSetInterface extends \Countable, \Iterator
{
    /**
     * Retrieves the current row.
     *
     * @since [*next-version*]
     * 
     * @return array|ArrayAccess The current row of the result set.
     */
    public function current();
}
