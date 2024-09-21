<?php
/**
 * Uuid4.php
 *
 * Uuid4 trait
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

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Ramsey\Uuid\Uuid;

/**
 * Class Uuid4
 *
 * Adds UUID support and id references
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
trait UuidBase
{
    use HasUuids;

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['id'];
    }
}
