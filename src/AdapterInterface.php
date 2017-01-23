<?php

namespace Dhii\Storage;

use Dhii\Storage\Operation\OperationInterface;
use Dhii\Storage\Operation\ResultInterface;
use Dhii\Storage\Query\QueryInterface;

/**
 * Medium-agnostic storage adapter.
 *
 * @since [*next-version*]
 */
interface AdapterInterface
{
    /**
     * Queries the underlying medium based on a set of parameters.
     *
     * @since [*next-version*]
     *
     * @param OperationInterface $operation Represents the operation of the query.
     *                                      Typically, this would be a CRUD operation.
     *                                      When data is being created or updated, it will be retrieved from here.
     * @param QueryInterface     $query     Represents the specifics of the query.
     *                                      Conditions, limiting, ordering, and other parameters that determine
     *                                      what and how to retrieve should be passed here.
     *
     * @return ResultInterface The query result.
     */
    public function query(OperationInterface $operation, QueryInterface $query);
}
