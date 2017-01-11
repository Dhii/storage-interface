<?php

namespace Dhii\Storage;

/**
 * Something that is aware of the offset of storage operation result.
 *
 * @since [*next-version*]
 */
interface OffsetAwareInterface
{
    /**
     * Retrieve the number of rows to ignore from the start of the operation result.
     *
     * @since [*next-version*]
     *
     * @return int The number of rows to ignore.
     */
    public function getRowOffset();
}
