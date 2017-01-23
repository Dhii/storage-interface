<?php

namespace Dhii\Storage\Operation;

/**
 * Represents a result of a storage operation.
 *
 * @since 0.1
 */
interface ResultInterface
{
    /**
     * Gets the result set that is the product of a storage adapter operation.
     *
     * @since 0.1
     *
     * @return ResultSetInterface The operation results retrieved from storage.
     */
    public function getResultSet();

    /**
     * Retrieves the auto insert-ID that may be the result of a create operation.
     *
     * @since 0.1
     *
     * @return int|null The ID, if it resulted from the operation; otherwise, null.
     */
    public function getInsertId();

    /**
     * Retrieves the error message that may be the result of an operation.
     *
     * @since 0.1
     *
     * @return string|null The error message, if it resulted from the operation; otherwise, null.
     */
    public function getErrorMessage();
}
