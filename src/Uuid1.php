<?php
/**
 * Uuid1.php
 *
 * Uuid1 trait
 *
 * php 8.2+
 *
 * @category  None
 * @package   Floor9design\LaravelUuidSupport
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @link      https://github.com/floor9design-ltd/laravel-uuid-model-support
 * @version   0.0
 * @since     0.0
 */

namespace Floor9design\LaravelUuidModelSupport;

use Ramsey\Uuid\Uuid;

/**
 * Class Uuid1
 *
 * Adds UUID v1 support
 *
 * @category  None
 * @package   Floor9design\LaravelUuidSupport
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   0.0.1
 * @link      https://floor9design.com
 * @see       https://github.com/floor9design-ltd/laravel-uuid-model-support
 * @since     File available since Release 0.0.1
 */
trait Uuid1
{
    use UuidBase;

    /**
     * Generate a new UUID for the model.
     */
    public function newUniqueId(): string
    {
        return (string)Uuid::uuid1();
    }
}
