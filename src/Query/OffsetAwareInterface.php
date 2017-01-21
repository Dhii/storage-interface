<?php

namespace Dhii\Storage\Query;

/**
 * Something that is aware of the offset of a storage operation result.
 *
 * @since [*next-version*]
 */
interface OffsetAwareInterface
{
    /**
     * Retrieve the number of rows to ignore from the start of an operation result.
     *
     * @since [*next-version*]
     *
     * @return int The number of rows to ignore.
     */
    public function getRowOffset();
}
