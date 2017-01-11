<?php

namespace Dhii\Storage;

/**
 * Represents a result of a storage operation.
 *
 * @since [*next-version*]
 */
interface OperationResultInterface
{
    /**
     * Gets the result set that is the product of a storage adapter operation.
     *
     * @since [*next-version*]
     *
     * @return ResultSetInterface The operation results retrieved from storage.
     */
    public function getResultSet();

    /**
     * Gets the auto insert-ID that may be the result of a create operation.
     *
     * @since [*next-version*]
     *
     * @return int|null The ID, if it resulted from the operation; otherwise, null.
     */
    public function getInsertId();
}
