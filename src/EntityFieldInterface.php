<?php

namespace Dhii\Storage;

use \Dhii\Util\String\StringableInterface;

/**
 * Something that can represent a field for an entity.
 *
 * @since [*next-version*]
 */
interface EntityFieldInterface extends EntityAwareInterface
{
    /**
     * Retrieve the name of the entity.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface The string entity name or a string castable object.
     */
    public function getEntityName();

    /**
     * Retrieves the name of the entity field.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface The string field name or a string castable object.
     */
    public function getFieldName();
}
