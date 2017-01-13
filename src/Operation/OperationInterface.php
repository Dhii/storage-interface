<?php

namespace Dhii\Storage\Operation;

use ArrayAccess;

/**
 * Represents an operation to run on a storage.
 *
 * Typically, a CRUD operation.
 * Also can contain the data to pass to the storage, such as entity data for updating or creating.
 *
 * @since [*next-version*]
 */
interface OperationInterface
{
    /**
     * Indicates that the operation should create some new data in the storage.
     *
     * @since [*next-version*]
     */
    const CREATE = 'create';

    /**
     * Indicates that the operation should read some data from the storage.
     *
     * @since [*next-version*]
     */
    const READ = 'read';

    /**
     * Indicates that the operation should update some data in the storage.
     *
     * @since [*next-version*]
     */
    const UPDATE = 'update';

    /**
     * Indicates that the operation should delete some data from the storage.
     *
     * @since [*next-version*]
     */
    const DELETE = 'delete';

    /**
     * Retrieve the type of this operation.
     *
     * @since [*next-version*]
     *
     * @return string|int The operation type.
     */
    public function getType();

    /**
     * Retrieve the data that is passed to the operation.
     *
     * @since [*next-version*]
     *
     * @return array|ArrayAccess A map of the data to pass to the operation.
     */
    public function getData();
}
