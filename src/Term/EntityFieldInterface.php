<?php

namespace Dhii\Storage\Term;

use Dhii\Evaluable\EvaluableInterface;
use Dhii\Util\String\StringableInterface;

/**
 * Something that can represent a field of an entity.
 *
 * @since 0.1
 */
interface EntityFieldInterface extends EvaluableInterface
{
    /**
     * Retrieve the name of the entity.
     *
     * @since 0.1
     *
     * @return string|StringableInterface The string entity name or a string-castable object representing such a name.
     */
    public function getEntityName();

    /**
     * Retrieves the name of the entity field.
     *
     * @since 0.1
     *
     * @return string|StringableInterface The string field name or a string-castable object representing such a name.
     */
    public function getFieldName();
}
