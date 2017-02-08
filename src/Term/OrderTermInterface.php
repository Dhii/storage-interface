<?php

namespace Dhii\Storage\Term;

/**
 * Something that can define ordering based on an entity field.
 *
 * @since [*next-version*]
 */
interface OrderTermInterface extends EntityFieldInterface
{
    /**
     * Indicates ascending order mode.
     *
     * @since [*next-version*]
     */
    const ASC = 'asc';

    /**
     * Indicates descending order mode.
     *
     * @since [*next-version*]
     */
    const DESC = 'desc';

    /**
     * Retrieves the ordering mode used.
     *
     * @see OrderTermInterface::ASC
     * @see OrderTermInterface::DESC
     * @since [*next-version*]
     *
     * @return int|string The ordering mode.
     */
    public function getOrderMode();
}
